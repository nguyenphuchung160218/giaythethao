<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends FrontendController
{
    public function getUser()
    {
    	return view('user.index');
    }
}
