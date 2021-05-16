<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends FrontendController
{
    public function getSearch(Request $request)
    {
       $products = Product::where('pro_active',Product::STATUS_PUBLIC)->inRandomOrder();
        
        if($request->search)
        {
            // $products->where('pro_gender','like','%'.$request->search.'%');
            $products->where('pro_name','like','%'.$request->search.'%');
           
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
        $viewData=[
            'products' => $products,
            'query' => $request->query(),
        ];
        return view('product.index',$viewData);
    }
    public function getSold(Request $request)
    {
      
        $products= Product::where(
            'pro_buy','>',0 
            )->inRandomOrder();
           $products=$products->paginate(6);
           $viewData =[
              'products'=>$products,
              'query' =>$request->query()
           ];
           return view('product.index',$viewData);
           
    }
     public function getHot(Request $request)
    {
      
            $products= Product::where([
               'pro_hot' => Product::HOT_ON,
               'pro_active' => Product::STATUS_PUBLIC
                 ])->inRandomOrder();
          $products=$products->paginate(6);
           $viewData =[
              'products'=>$products,
              'query' =>$request->query()
           ];
           return view('product.index',$viewData);
     
    }
     public function getNew(Request $request)
    {
        $products= Product::where(
            'pro_sale','>',0 
            )->inRandomOrder();
            $products=$products->paginate(6);
           $viewData =[
              'products'=>$products,
              'query' =>$request->query()
           ];
           return view('product.index',$viewData);
    }
    public function getProduct(Request $request)
    {
    	
         // $url = preg_split('/(-)/i',$url);
        $products = Product::where('pro_active',Product::STATUS_PUBLIC)->inRandomOrder();
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
    public function productOther(Request $request)
    {
        $products = Product::where('pro_gender','chung')->inRandomOrder();
        $products=$products->paginate(4);
        $viewData = [
            'products' => $products,
            'query' => $request->query(),
        ];
        return view('product.index',$viewData);
    }
    public function productMale(Request $request)
    {
        $products = Product::where('pro_gender','nam')->inRandomOrder();
        $products=$products->paginate(4);
        $viewData = [
            'products' => $products,
            'query' => $request->query(),
        ];
        return view('product.index',$viewData);
    }
    public function productFemale(Request $request)
    {
        $products = Product::where('pro_gender','nu')->inRandomOrder();
        $products=$products->paginate(4);
        $viewData = [
            'products' => $products,
            'query' => $request->query(),
        ];
        return view('product.index',$viewData);
    }
}
