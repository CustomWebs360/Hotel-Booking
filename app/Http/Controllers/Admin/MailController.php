<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //index
    public function index(){
        return view('admin.mail.mail', ['contacts' => Contact::latest()->get()]);
    }
    //inbox
    public function inbox(Request $request){
        return view('admin.mail.all_mail', ['contacts' => Contact::latest()->get()]);

    }
    //mail_details
    public function mail_details(Request $request){
        $mail_details = Contact::find($request->data);
        return response()->json(['mail_details' => $mail_details]);
    }

    //mail compose
    public function mail_compose(Request $request){
        return $request;
    }
}
