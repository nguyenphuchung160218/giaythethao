<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{
    public function __construct()
    {
        $cagetories = Category::where('c_home',Category::HOME_PUBLIC)->get();
        View::share('categories',$cagetories);
    }
}
