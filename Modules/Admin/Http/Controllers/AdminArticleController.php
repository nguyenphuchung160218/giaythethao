<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestArticle;
use App\Models\Article;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class AdminArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin::article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::article.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $requestArticle)
    {
        $this->insertOrUpdate($requestArticle);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin::article.update',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $requestArticle, $id)
    {
        $this->insertOrUpdate($requestArticle,$id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function insertOrUpdate($requestArticle,$id = '')
    {
        $article= new Article();
        if($id) $article= Article::find($id);
        $article->a_name = $requestArticle->a_name;
        $article->a_slug = Str::slug($requestArticle->a_name);
        $article->a_content = $requestArticle->a_content;
        $article->a_title_seo = $requestArticle->a_title_seo;
        $article->a_description =  $requestArticle->a_description;

        if($requestArticle->hasFile('avatar'))
        {
            $file = upload_image('avatar');
            if(isset($file['name']))
            {
                $article->a_avatar = $file['name'];
            }
        }

        $article->save();
    }
    public function action($action,$id)
    {
        if($action)
        {
            $article = Article::find($id);
            switch ($action)
            {
                case 'delete':
                    $article->delete();
                    break;
                case 'active':
                    $article->a_active = $article->a_active ? 0 : 1;
                    $article->save();
                    break;
                case 'hot':
                    $article->a_hot = $article->a_hot ? 0 : 1;
                    $article->save();
                    break;
            }

        }
        return redirect()->back();
    }
}
