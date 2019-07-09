<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{

    public function create()
    {

        return view('contact.create');
    }
    public function store()
    {
        $data = request()->validate([
            'firstname' => 'required',
            'surname' => '',
            'email' => 'required|email',
            'subject' => '',
            'message' => 'required'
        ]);

        Mail::to('abap.pal@gmail.com')->send(new ContactFormMail($data));
        return view('contact.create')->with('message', 'Thanks for your message. We \'ll be in touch.');
    }
}
