<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\CategoryArticlec;
use App\Http\Requests\RequestCategory;
use Illuminate\Support\Str;

class AdminCategoryArticle extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $a_categories= CategoryArticlec::select('id','c_name_article','c_avatar_article','c_hot_article')->get();
        return view('admin::categoryarticle.index',compact('a_categories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::categoryarticle.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(RequestCategory $requestCategory)
    {
        $this->insertOrUpdate($requestCategory);
        return redirect()->back()->with('success','Thêm mới thành công');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $category = CategoryArticlec::find($id);
        return view('admin::categoryarticle.update',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(RequestCategory $requestCategory,$id)
    {
        $this->insertOrUpdate($requestCategory,$id);
        return redirect()->back()->with('success','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function insertOrUpdate($requestCategory,$id='')
    {
            $category= new CategoryArticlec();
            if($id) $category= CategoryArticlec::find($id);
            $category->c_name_article = $requestCategory->name;
            $category->c_slug_article = Str::slug($requestCategory->name);
            $category->save();
    }
    public function action($action,$id)
    {
        if($action)
        {
            $category = CategoryArticlec::find($id);
            switch ($action)
            {
                case 'delete':
                    $category->delete();
                    $messages = 'Xoá thành công';
                    break;
                case 'home':
                    $category->c_hot_article = $category->c_hot_article  == 1 ? 0 : 1;
                    $messages = 'Cập nhật thành công';
                    $category->save();
                    break;
            }
        }
        return redirect()->back()->with('success',$messages);
    }
}
