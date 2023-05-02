<?php

namespace App\Http\Controllers;

use App\Mail\SendMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request){
        $details = [
            'email' => $request['email'],
            'order' => $request['order'],
            'message' => $request['message'],
        ];

        // Mail::to('osama200949@gmail.com')->send(new SendMailable($details));
        Mail::to('osama200949@gmail.com')->later(now()->addSeconds(30) ,new SendMailable($details));

        return redirect('/');
    }
}
