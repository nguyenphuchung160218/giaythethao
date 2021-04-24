<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends FrontendController
{
     public function __construct()
    {
        parent::__construct();
    }
    public function getArticle(Request $request)
    {
    	$articles = Article::paginate(6);
    	$articlesHot =Article::where('a_hot',1)->limit(3)->get();
    	$viewData=[
    		'articles' =>$articles,
    		'articlesHot'=>$articlesHot,
    	];

    	return view('article.index',$viewData);
    }
    public function getDetail($slug){
    	$articles = Article::where('a_slug',$slug)->first();
    	$articlesHot =Article::where('a_hot',1)->limit(3)->get();
    	$viewData=[
    		'articles' =>$articles,
    		'articlesHot'=>$articlesHot,
    	];
    	return view('article.detail',$viewData);
    }
    
}
