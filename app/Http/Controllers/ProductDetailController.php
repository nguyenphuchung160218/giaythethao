<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Rating;
use Illuminate\Support\Facades\View;

class ProductDetailController extends FrontendController
{
    public function productDetail($slug)
    {
        $productDetail = Product::where([
        	'pro_active' => Product::STATUS_PUBLIC,
        	'pro_slug' => $slug,
        ])->first();
        $id = $productDetail->pro_category_id;
        $products = Product::where(
            'pro_category_id',$id
           )->get();
        $ratings = Rating::where('ra_product_id',$productDetail->id)->orderBy('id','DESC')->paginate(10);
        $viewData=[
        	'productDetail' => $productDetail,
        	'products' => $products,
            'ratings' => $ratings
        ];
        return view('product.detail', $viewData);      
    }
    public function viewProduct($slug)
    {
        $viewProduct = Product::where([
            'pro_active' => Product::STATUS_PUBLIC,
            'pro_slug' => $slug,
        ])->first();
        View::share('viewProduct',$viewProduct);
    }
}
