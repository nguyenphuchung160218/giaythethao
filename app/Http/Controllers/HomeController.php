<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

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
    public function viewProduct($id)
    {
        if ($request->ajax())
        {
            $product = Product::where('id','=',$id )->get();
            $html = view('layout.viewproduct',compact('product'))->render();
            return \response()->json($html);
        }
       
    }
}
