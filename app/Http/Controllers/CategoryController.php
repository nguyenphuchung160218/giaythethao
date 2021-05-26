<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends FrontendController
{
    public function getType(Request $request,$type='')
    {
        $products = Product::where('pro_active',Product::STATUS_PUBLIC);
        if($type=='sold'){
            $products=$products->where('pro_buy','>',0 );
        }
        if($type=='hot'){
            $products->where('pro_hot',Product::HOT_ON);
        }
        if($type=='sale'){
            $products->where('pro_sale','>',0);
        }
        if($type=='default'){
            $products->where('pro_sale','=',0 );
        }
        if($type=='male'){
            $products->where('pro_gender','nam');
        }
        if($type=='female'){
            $products->where('pro_gender','nu');
        }
        if($type=='other'){
            $products->where('pro_gender','chung');
        }
        $this->getFilter($request,$products);
        $products=$products->paginate(6);
        $viewData = [
            'products' => $products,
            'query' => $request->query()
        ];
        return view('product.index',$viewData);
    }
    
    public function getListProduct(Request $request,$slug='')
    {
        $products = Product::where('pro_active',Product::STATUS_PUBLIC);
        if($slug!='')
        {
            $id = Category::where('c_name',$slug)->select('id')->first()->id;
            $products->where('pro_category_id',$id)->get();
        }
        if($request->search)
        {
            $products->where('pro_name','like','%'.$request->search.'%');   
        }

        $this->getFilter($request,$products);
        $products=$products->paginate(6);
        
        $viewData = [
            'products' => $products,
            'query' => $request->query()
        ];
        return view('product.index',$viewData);
    }
    public function getFilter(Request $request,$products='')
    {
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
    }
}
