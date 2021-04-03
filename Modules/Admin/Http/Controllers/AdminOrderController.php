<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $orders = Order::with('user:id,name')->get();
        return view('admin::order.index', compact('orders'));
    }
    public function orderDetail(Request $request,$id)
    {
        if ($request->ajax())
        {
            $ordersDetail = OrderDetail::with('product')->where('od_order_id',$id)->get();
            $html = view('admin::order.orderDetail',compact('ordersDetail'))->render();
            return \response()->json($html);
        }
    }
    public function action($action,$id)
    {
        if($action)
        {
            $orders = Order::find($id);
            switch ($action)
            {
                case 'delete':
                    $orders->delete();
                    $messages = 'Xoá thành công';
                    break;
                case 'status':
                    $orders = Order::find($id);
                    $ordersDetail = OrderDetail::where('od_order_id',$id)->get();
                     if($ordersDetail)
                     {
                         //tru di so luong san pham
                         //tang bien pay san pham
                         foreach ($ordersDetail as $orderDetail)
                         {
                             $product = Product::find($orderDetail->od_product_id);
                             $product->pro_number = $product->pro_number - $orderDetail->od_qty;
                             $product->pro_buy = $product->pro_buy + $orderDetail->od_qty;
                             $product->save();
                         }
                     }
                     //update pay user
                     $orders->o_status = Order::STATUS_DONE;
                     $orders->save();
                     $messages = 'Xử lý đơn hàng thành công';
            }
        }
        return redirect()->back()->with('success',$messages);
    }
}
