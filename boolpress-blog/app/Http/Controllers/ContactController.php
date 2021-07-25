<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\ContactFormMarkdown;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function form()
    {
        return view("guest.contacts");
    }

    public function storeAndSend(Request $request)
    {
        //valida dati
        $validateData = $request->validate([
            "name" => "required",
            "email" => "required | email",
            "message" => "required"
        ]);

        //salva in database
        $contact = Contact::create($validateData);
        //ddd($validatedData);
        //ddd($contact);
        //Visualizza senza inviare
        //return (new ContactFormMarkdown($contact))->render();

        //Invia mail
        Mail::to("admin@test.com")->send(new ContactFormMarkdown($contact));
        return redirect()
            ->back()
            ->with("message", "You did it! We'll be back ASAP");
    }
}

    