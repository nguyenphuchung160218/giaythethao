<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Rating;
use Illuminate\Support\Facades\View;
use Gloudemans\Shoppingcart\Cart;


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

        //average star
        if($productDetail->pro_total_rating>0)
        {
            $averageStar = round($productDetail->pro_total_number / $productDetail->pro_total_rating,2);
        }
        $ratings = Rating::where('ra_product_id',$productDetail->id)->orderBy('id','DESC')->paginate(10);
        $viewData=[
            'averageStar' => isset($averageStar) ? $averageStar : 0,
        	'productDetail' => $productDetail,
        	'products' => $products,
            'ratings' => $ratings
        ];
        return view('product.detail', $viewData);      
    }
    public function buyNow(Request $request,$id)
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
        return redirect()->route('get.list.cart');
    } 
}
