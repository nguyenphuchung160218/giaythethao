<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RatingController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function saveRating(Request $request,$id)
    {
        dd($request);
        Rating::insert([
            'ra_product_id' => $id,
            'ra_number' => 5,
            'ra_content' => $request->content,
            'ra_email' => $request->email,
            'ra_name' => $request->name,
            'ra_user_id' => get_data_user('web') ? get_data_user('web') : 0,           
        ]);
        $product = Product::find($id);
        $product->pro_total_number += $request->number;
        $product->pro_total_rating += 1;
        $product->save();
        return redirect()->back()->with('success','Đánh giá thành công');
    }
}