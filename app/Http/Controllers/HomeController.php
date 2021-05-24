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
            $price = number_format($product->pro_price,0,',','.');
            $sale=number_format($product->pro_price*(100-$product->pro_sale)/100,0,',','.');
  
            $html = "
                    <div class='container-fluid px-0'>
                       <div class='row'>
                        <div class='slider slider-for slick-initialized slick-slider'>
                                <div class='slick-list draggable'>
                                   <div class='slick-track' style='opacity: 1; width: 1480px;'>
                                      <div class='slick-slide' data-slick-index='0' aria-hidden='true' style='width: 296px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;' tabindex='-1'>
                                         <div>
                                            <div style='width: 100%; display: inline-block;'><img src='{asset(pare_url_file($product->images[0]->i_avatar))}' class='img-fluid rounded' alt=''></div>
                                         </div>

                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class='col-lg-7 mt-4 mt-lg-0 pt-2 pt-lg-0'>
                             <h4 class='title'>{$product->pro_name}</h4>
                             <h5 class='text-muted'>{$sale} <del class='text-danger ml-2'>{$price}</del> </h5>
                             <h5 class='mt-4'>Số lượt xem :<span class='text-muted'>{$product->pro_view}</span></h5> 
                             <h5 class='mt-4'>Yêu thích : <span class='text-muted'>{$product->pro_heart}</span></h5>
                             <h5 class='mt-4'>Nội dung :<span class='text-muted'>{$product->pro_content}</span></h5> 
                             </div>

                          </div>
                       </div>
                    </div>
            ";
              
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
