<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request; //<-qui non dice "non puoi usarlo perché il nome è già in uso"
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{

    public function index()
    {
        return view("guest.welcome");
    }

    public function about()
    {
        return view("guest.about");
    }

    public function contacts()
    {
        return view("guest.contacts");
    }

    public function sendContactForm(Request $request)
    {
        //valida dati
        //ddd($request->all());
        $validateData = $request->validate([
            "name" => "required",
            "email" => "required | email",
            "message" => "required"
        ]);

        //ddd($validatedData);
        //invia mail
        //visualizza senza inviare
        //return (new ContactFormMail($validatedData))->render();

        Mail::to("admin@test.com")->send(new ContactFormMail($validateData));
        return redirect()
            ->back()
            ->with("message", "You did it! We'll be back ASAP");
    }
}