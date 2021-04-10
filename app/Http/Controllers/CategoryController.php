<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends FrontendController
{
    public function getProduct(Request $request)
    {
    	$url = $request->segment(2);
        $products = Product::where('pro_active',Product::STATUS_PUBLIC);
        if($url!=null)
        {
            $id = Category::where('c_name',$url)->select('id')->first();

            dd($id);
            $products->where('pro_category_id',$id->id)->get();
        }
    	if($request->search)
        {
            $products->orWhere('pro_name','like','%'.$request->search.'%');
        }

        if($request->price)
        {
            $price = $request->price;
            switch ($price)
            {
                case '1';
                    $products->where('pro_price','<',1000000);
                    break;
                case '2';
                    $products->whereBetween('pro_price',[1000000,3000000]);
                    break;
                case '3';
                    $products->whereBetween('pro_price',[3000000,5000000]);
                    break;
                case '4';
                    $products->whereBetween('pro_price',[500000,7000000]);
                    break;
                case '5';
                    $products->whereBetween('pro_price',[7000000,10000000]);
                    break;
                case '6';
                    $products->where('pro_price','>',10000000);
                    break;
            }
        }
        if ($request->orderby)
        {
            $orderby = $request->orderby;
            switch ($orderby)
            {
                case 'desc':
                    $products->orderBy('id','DESC');
                    break;
                case 'asc':
                    $products->orderBy('id','ASC');
                    break;
                case 'price_max':
                    $products->orderBy('pro_price','ASC');
                    break;
                case 'price_min':
                    $products->orderBy('pro_price','DESC');
                    break;
                default:
                    $products->orderBy('id','DESC');
            }
        }
        $products=$products->paginate(6);
        $viewData = [
            'products' => $products,
            'query' => $request->query(),
        ];
        return view('product.index',$viewData);
    }
}
