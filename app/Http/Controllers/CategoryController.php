<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends FrontendController
{
    public function getSearch(Request $request)
    {
     
        $products = Product::where('pro_active',Product::STATUS_PUBLIC);
        if($request->search)
        {
            $products->Where('pro_name','like','%'.$request->search.'%');
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
                    $products->orderBy('id','ASC')->get();
                    break;
                case 'price_max':
                    $products->orderBy('pro_price','ASC')->get();
                    break;
                case 'price_min':
                    $products->orderBy('pro_price','DESC')->get();
                    break;
                default:
                    $products->orderBy('id','DESC')->get();
            }
        }
        $products=$products->paginate(6);
        $viewData = [
            'products' => $products,
            'query' => $request->query(),
        ];
        return view('product.index',$viewData);
    }
    public function getProduct(Request $request)
    {
    	
         // $url = preg_split('/(-)/i',$url);
         
        $products = Product::where('pro_active',Product::STATUS_PUBLIC);
         $url = $request->segment(2);
        if($url!='')
        {
            $id = Category::where('c_name',$url)->select('id')->first();
            $products->where('pro_category_id',$id->id)->get();
        }

        $products=$products->paginate(6);
        $viewData = [
            'products' => $products,
            'query' => $request->query(),
        ];
        return view('product.index',$viewData);
    }
}
