<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;

class HomeController extends FrontendController
{
    public function index()
    {
    	$productsHot = Product::where(['pro_active'=>Product::STATUS_PUBLIC,'pro_hot'=>1])->inRandomOrder()->get();
        $productsSell = Product::where(['pro_active'=>Product::STATUS_PUBLIC,['pro_buy','>','0']])->limit(4)->orderBy('pro_buy','desc')->get();
        $viewData=[
            'productsHot'=>$productsHot,
            'productsSell'=>$productsSell
        ];
    	return view('home',$viewData);
    }
    public function viewProduct(Request $request,$id)
    {
      if ($request->ajax())
        {
            $product = Product::find($id);
            $product->pro_view +=1;
            $product->save();
            $html = view('layout.viewProduct',compact('product'))->render();
            return \response()->json($html);
        }

    }
     public function LikeProduct($id)
        {
            $product = Product::find($id);
            $product->pro_heart+=1;
            $product->save();
            return redirect()->back()->with('success','Sản phẩm đã được bạn yêu thích');
        }
}
