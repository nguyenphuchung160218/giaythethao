<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ShoppingCartController extends FrontendController
{
    private $vnp_TmnCode = "UDOPNWS1"; //Mã website tại VNPAY
    private $vnp_HashSecret = "EBAHADUGCOEWYXCMYZRMTMLSHGKNRPBN"; //Chuỗi bí mật
    private $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    private $vnp_Returnurl = "http://localhost:81/shoessport/public/gio-hang/thanh-toan-online";

    //them gio hang
    public function addProduct(Request $request,$id)
    {
        $product = Product::select('pro_name','id','pro_price','pro_sale','pro_number')->find($id);
        $number = $product->pro_number;
        if(!$product) return redirect('/');

        $price = $product->pro_price;
        if($product->pro_sale)
        {
            $price = $price * (100-$product->pro_sale)/100;
        }
        if($product->pro_number == 0)
        {
            return redirect()->back()->with('warning','Sản phẩm đã hết hàng');
        }
        \Cart::add([
            'id'=> $id,
            'name'=> $product->pro_name,
            'qty'=> 1,
            'price'=> $price,
            'so'=>$number,
            'weight' => 550,          
            'options'=> [
                'avatar'=> $product->images[0]->i_avatar,
                'sale'=> $product->pro_sale,
                'price_old'=> $product->pro_price, 
                'size' =>40        
            ],
        ]);


        return redirect()->back()->with('success','Thêm vào giỏ hàng thành công');
    }
    

    public function updateProduct(Request $request, $id)
    {
        $qty = $request->quantity;
        $item = \Cart::get($id);
        $option = $item->options->merge(['size' => $request->size]);
        \Cart::update($id,['qty' => $qty,'options' => $option,]);
        return redirect()->back()->with('success','Cập nhật thành công');
    }

    public function deleteProduct($key)
    {
        \Cart::remove($key);
        return redirect()->back()->with('success','Xóa thành công');
    }

    //danh sach gio hang
    public function getListShoppingCart()
    {   
        $products = \Cart::content();
        return view('shopping.index',compact('products'));
    }

    //form thanh toan
    public function getFormPayment()
    {
        $products = \Cart::content();
        return view('shopping.payment',compact('products'));
    }

    //luu thong tin thanh toan
    public function savePayment(Request $request)
    {
        $totalMoney = str_replace(',','',\Cart::subtotal(0,3));
        $email = get_data_user('web','email');
        $order=[
            'o_user_id' => get_data_user('web'),
            'o_total' => (int)$totalMoney,
            'o_note' => $request->note,
            'o_address' => $request->address,
            'o_type' => 0,
            'o_phone' => $request->phone,
        ];
        $orderId = Order::insertGetId($order);
        if ($orderId)
        {
            $products =\Cart::content();
            foreach ($products as $product)
            {
                OrderDetail::insert([
                    'od_order_id' => $orderId,
                    'od_product_id' => $product->id,
                    'od_qty' => $product->qty,
                    'od_price' => $product->options->price_old,
                    'od_sale' => $product->options->sale,
                    'od_size' => $product->options->size,
                ]);
            }
        }
        
        $data=[
            'transactionId' => $orderId,
            'transaction' => $order,
            'products' => $products, 
            'email' => $email,   
            'userName' => get_data_user('web','name'),      
        ];
        Mail::send('shopping.sendMail',$data, function($message) use ($email){
                $message->to($email,'Xác nhận đơn hàng ')->subject('Xác nhận đơn hàng');
            });
        \Cart::destroy();
        return redirect('/')->with('success','Mua hàng thành công! Mời bạn kiểm tra mail, chúng tôi sẽ liên hệ với bạn sớm nhất');
    }
    public function getFormPayOnline(Request $request)
    {
        if($request->vnp_ResponseCode=='00')
        {
            $email = get_data_user('web','email');
            $order=[
                'o_user_id' => get_data_user('web'),
                'o_total' => $request->vnp_Amount/100,
                'o_note' => $request->vnp_OrderInfo,
                'o_address' => get_data_user('web','address'),
                'o_phone' => get_data_user('web','phone'),
                'o_type' => 1,
                'vnp_BankTranNo' =>$request->vnp_BankTranNo,
                'vnp_BankCode' =>$request->vnp_BankCode,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
            $orderId = Transaction::insertGetId($order);
            if ($orderId)
            {
                $products =\Cart::content();
                foreach ($products as $product)
                {
                    Order::insert([
                        'od_transaction_id' => $orderId,
                        'od_product_id' => $product->id,
                        'od_qty' => $product->qty,
                        'od_price' => $product->options->price_old,
                        'od_sale' => $product->options->sale,
                        'od_size' => $product->options->size,
                    ]);
                }
                $data=[
                    'transactionId' => $orderId,
                    'transaction' => $order,
                    'products' => $products, 
                    'email' => $email,   
                    'userName' => get_data_user('web','name'),      
                ];
                Mail::send('shopping.sendMail',$data, function($message) use ($email){
                    $message->to($email,'Xác nhận đơn hàng ')->subject('Xác nhận đơn hàng');
                });
                \Cart::destroy();              
                return redirect()->to('/')->with('success','Thanh toán thành công! Mời bạn kiểm tra mail, chúng tôi sẽ liên hệ với bạn sớm nhất');
            }           
            else{
                return redirect()->to('/')->with('danger','Thanh toán không thành công');
            }
        }              
        $products= \Cart::content();
        return view('shopping.payment_online',compact('products'));
    }
    public function savePayOnline(Request $request)
    {
        $totalMoney = str_replace(',','',\Cart::subtotal(0,3));       
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $this->vnp_TmnCode,
            "vnp_Amount" => $totalMoney*100,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $_SERVER['REMOTE_ADDR'],
            "vnp_Locale" => $request->language,
            "vnp_OrderInfo" => $request->note ? $request->note : 'Không',
            "vnp_ReturnUrl" => $this->vnp_Returnurl,
            "vnp_TxnRef" => date('YmdHis'),
        );
        if ($request->bank_code) {
            $inputData['vnp_BankCode'] = $request->bank_code;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $this->vnp_Url . "?" . $query;
        if ($this->vnp_HashSecret) {
            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $this->vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
        , 'message' => 'success'
        , 'data' => $vnp_Url);
        return redirect()->to($returnData['data']);
    }
}
