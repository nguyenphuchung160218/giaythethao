<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Tintnaingwin\EmailChecker\Facades\EmailChecker;
class ContactController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getContact()
    {
        return view('info.contact');
    }
    public function saveContact(Request $request)
    {
        $data = $request->except('_token');
        Contact::insert($data);
        return redirect()->back()->with('success','Gủi phản hồi thành công');
    }
}
