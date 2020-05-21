<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class PageController extends Controller
{
    public function home()
    {
        return view('homepage');
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email:rfc,dns',
            'message' => 'required|string',
        ]);

        $contact = Contact::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'message' => $request['message'],
        ]);

        $contact->send();

        return response()->json([
            'message' => 'Thank you. Your message has been sent.',
            'contact' => $contact,
        ]);
    }
}
