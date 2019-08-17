<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function contactForm()
    {

        return view('contact/contact_form');
    }

    public function send(Request $request)

    {

      Mail::send('email.contact_mail', $request->all(),
          function($message)
          {

             $message->to('geoffrey.bedle@gmail.com')->subject('contact');
          });
      return redirect(route('contact'))->with('success', 'Votre message a bien été envoyé');
    }
}
