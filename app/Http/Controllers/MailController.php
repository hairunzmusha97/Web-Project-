<?php

namespace App\Http\Controllers;

use App\Mail\ResponseMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $details=[
            'title' => 'Mail from the Doctor Appoinment System',
            'body' => 'This is to let you know that we received your message, we will get to you as soon as possible.'

        ];
        Mail::to("musharrif9721@gmail.com")->send(new ResponseMail($details));
        return "Email Sent";
    }
}
