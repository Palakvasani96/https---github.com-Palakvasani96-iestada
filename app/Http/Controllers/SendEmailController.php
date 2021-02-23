<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
        return view('website.contactUs.index');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'subject'     =>  'required',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'subject'     =>  $request->subject,
            'message'   =>   $request->message
        );

     Mail::to('palakvasani96@gmail.com')->send(new SendMail($data));
return "your mail is sent successfully.";

    }
}
