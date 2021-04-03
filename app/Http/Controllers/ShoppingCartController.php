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
    //them gio hang
    public function addProduct(Request $request,$id)
    {
        $product = Product::select('pro_name','id','pro_price','pro_sale','pro_avatar','pro_number')->find($id);

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
            'weight' => 550,          
            'options'=> [
                'avatar'=> $product->pro_avatar,
                'sale'=> $product->pro_sale,
                'price_old'=> $product->pro_price,    
                // 'size' =>0          
            ],
        ]);
        return redirect()->back()->with('success','Thêm vào giỏ hàng thành công');
    }

    public function updateProduct(Request $request, $id)
    {
        //$qty = $request->quantity;
        // $item = \Cart::get($id);
        // $option = $item->options->merge(['size' => $request->size]);
        // \Cart::update($id,['qty' => $qty,'options' => $option,]);
        // return redirect()->back()->with('success','Cập nhật thành công');
        \Cart::update($id,$request->quantity);
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
            // 'tr_type' => 0,
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
                    // 'od_size' => $product->options->size,
                ]);
            }
        }
        // $data=[
        //     'transactionId' => $transactionId,
        //     'transaction' => $transaction,
        //     'products' => $products, 
        //     'email' => $email,   
        //     'userName' => get_data_user('web','name'),      
        // ];
        // Mail::send('shopping.sendMail',$data, function($message) use ($email){
        //         $message->to($email,'Xác nhận đơn hàng ')->subject('Xác nhận đơn hàng');
        //     });
        \Cart::destroy();
        return redirect('/')->with('success','Mua hàng thành công! Mời bạn kiểm tra mail, chúng tôi sẽ liên hệ với bạn sớm nhất');
    }
}
