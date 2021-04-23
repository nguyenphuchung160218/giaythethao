<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\CategoryArticlec;
class ArticleController extends FrontendController
{
     public function __construct()
    {
        parent::__construct();
    }
    public function getArticle(Request $request)
    {
    	$articles = Article::paginate(1);
        $c_articles = CategoryArticlec::where('c_hot_article',CategoryArticlec::HOME_PUBLIC)->get();
        // $c_articles = CategoryArticlec::where('c_hot_article',CategoryArticlec::HOME_PUBLIC)->leftjoin('articles',' categoryarticles.id','=','articles.a_category_id')->select('
        //   categoryarticles.c_name_article as name','count(articles.a_category_id) as solan')->orderBy('categoryarticles.id');
    	$articlesHot =Article::where('a_hot',1)->limit(3)->get();
    	$viewData=[
    		'articles' =>$articles,
    		'articlesHot'=>$articlesHot,
             'c_articles'=> $c_articles,
             'query' => $request->query()
    	];

    	return view('article.index',$viewData);
    }
    public function getDetail($slug){
    	$articles = Article::where('a_slug',$slug)->first();
    	$articlesHot =Article::where('a_hot',1)->limit(3)->get();
        $c_articles = CategoryArticlec::where('c_hot_article',CategoryArticlec::HOME_PUBLIC)->get();
    	$viewData=[
    		'articles' =>$articles,
    		'articlesHot'=>$articlesHot,
            'c_articles'=> $c_articles
    	];
    	return view('article.detail',$viewData);
    }
    public function getArticleCategory(Request $request)
    {
        $url = $request->segment(3);

        $articles = Article::where('a_active',Article::STATUS_PUBLIC);
        $articlesHot =Article::where('a_hot',1)->limit(3)->get();
        // $c_articles = CategoryArticlec::where('c_hot_article',CategoryArticlec::HOME_PUBLIC)->leftjoin('articles',' categoryarticles.id','=','articles.a_category_id')->select('
        //     categoryarticles.c_name_article as name','count(articles.a_category_id) as solan');
        $c_articles = CategoryArticlec::where('c_hot_article',CategoryArticlec::HOME_PUBLIC)->get();
        $articles=$articles->paginate(6);
      
        if($url!=null)
        {
            $id = CategoryArticlec::where('c_slug_article',$url)->select('id')->first();
            $articles->where('a_category_id',$id->id);
        }
        $viewData = [
            'articles' => $articles,
            'c_articles'=>$c_articles,
            'articlesHot'=>$articlesHot,
            'query' => $request->query()
        ];
        return view('article.cate',$viewData);
    }
}
