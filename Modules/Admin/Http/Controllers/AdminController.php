<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Rating;
use App\Models\Contact;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
class AdminController extends Controller
{
 
   public function index()
    {
        $ratings = Rating::with('product:id,pro_name','user:id,name')->limit(10)->get();
        $contacts = Contact::limit(10)->get();

        //doanh thu ngay
        $moneyDay = Order::whereDay('updated_at',date('d'))
            ->where('o_status',Order::STATUS_DONE)
            ->sum('o_total');
        //doanh thu thang
        $moneyMonth = Order::whereMonth('updated_at',date('m'))
            ->where('o_status',Order::STATUS_DONE)
            ->sum('o_total');
        $moneyYear = Order::whereYear('updated_at',date('Y'))
            ->where('o_status',Order::STATUS_DONE)
            ->sum('o_total');
        $dataMoney = [
            [
                "name" => "Doanh thu ngày",
                "y" => (int)$moneyDay
            ],
            [
                "name" => "Doanh thu tháng",
                "y" => (int)$moneyMonth
            ],
            [
                "name" => "Doanh thu năm",
                "y" => (int)$moneyYear
            ],
        ];
        //danh sach don hang moi
        $transactionNews = Order::with('user:id,name')
            ->limit(5)->orderByDesc('id')->get();

        $countUser = User::count();
        $countRating = Rating::count();
        $countOrder = Order::count();
        $products = Product::where('pro_buy','>',0)->orderBy('pro_buy','DESC')->get();
        $viewData= [
            'ratings' => $ratings,
            'contacts' => $contacts,          
            'dataMoney' => json_encode($dataMoney),
            'transactionNews' => $transactionNews,
            'countOrder' =>$countOrder,
            'countRating'=>$countRating,
            'countUser'=>$countUser,
             'products'=>$products
        ];
        return view('admin::index',$viewData);
    }
    

}
