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
    	$article = Article::where('a_slug',$slug)->first();
    	$articlesHot =Article::where('a_hot',1)->limit(3)->get();
    	$viewData=[
    		'article' =>$article,
    		'articlesHot'=>$articlesHot,
    	];
    	return view('article.detail',$viewData);
    }
    public function getSearch()
    {

        return view('article.aside');
    }
    public function getSearchAjax()
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('articles')
            ->where('a_name', 'LIKE', "%{$query}%")
            ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
               $output .= '
               <li><a href="data/'. $row->id .'">'.$row->a_name.'</a></li>
               ';
           }
           $output .= '</ul>';
           echo $output;
           return $output;
       }
    }
     
}
