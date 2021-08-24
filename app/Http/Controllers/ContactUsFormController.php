<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactUsFormController extends Controller
{
    //create contact form
    public function createForm(Request $request)
    {
        return view('contact');
    }

    //store contact form data
    public function ContactUsForm(Request $request)
    {

      

        //store data in database
        Contact::create($request->all());

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
