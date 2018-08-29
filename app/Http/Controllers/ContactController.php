<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(ContactFormRequest $request)
    {
        Mail::send('emails.contact', [
            'msg' => $request->msg,
            'name' => $request->name,
            'email' => $request->email
        ], function ($mail) use ($request) {
            $mail->from($request->email, $request->name);
            $mail->to('john@doe.com')->subject('Contact Message');
        });

        return redirect()->route('contact.create')->with('message', 'Thank you for contacting us');
    }
}
