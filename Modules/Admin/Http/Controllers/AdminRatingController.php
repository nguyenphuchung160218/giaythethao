<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Rating;
class AdminRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $ratings = Rating::with('product:id,pro_name','user:id,name')->paginate(10);
        $viewData = [
            'ratings'=>$ratings,
        ];

        return view('admin::rating.index',$viewData);
    }
   public function action($action,$id)
    {
        if($action)
        {
            $rating = Rating::find($id);
            switch ($action)
            {
                case 'delete':
                    $rating->delete();
                    break;
            }

        }
        return redirect()->back();
    }
    
}
