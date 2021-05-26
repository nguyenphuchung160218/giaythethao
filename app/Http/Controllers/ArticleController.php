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

        //search
        if($request->search){
            $articles = Article::where(['a_active' => Article::STATUS_PUBLIC])->where('a_name','like','%'.$request->search.'%')->paginate(6);
        }
        
    	$viewData=[
    		'articles' =>$articles,
    		'articlesHot'=>$articlesHot,
    	];

    	return view('article.index',$viewData);
    }
    public function getDetail($slug){
    	$article = Article::where('a_slug',$slug)->first();
        $article->a_view +=1;
        $article->save();
    	$articlesHot =Article::where('a_hot',1)->limit(3)->get();
    	$viewData=[
    		'article' =>$article,
    		'articlesHot'=>$articlesHot,
    	];
    	return view('article.detail',$viewData);
    }
}
