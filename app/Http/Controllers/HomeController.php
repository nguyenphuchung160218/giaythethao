<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class HomeController extends FrontendController
{
    public function index()
    {
    	$products = Product::where('pro_active',Product::STATUS_PUBLIC)->get();
    	return view('home',compact('products'));
    }
    public function viewProduct($slug,$id)
    {
        $product = Product::where([
            'pro_active' => Product::STATUS_PUBLIC,
            'pro_slug' => $slug,
            'id' =>$id,
        ])->first()->get();
        $viewData = [
            'product' => $product
        ];
        return view('layout.viewproduct',$viewData);
    }
}
