<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
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
            'contact_options' => 'required|boolean',
        ]);

        return response()->json([
            'status' => 'OK',
            'message' => 'Thank you. Your message has been sent.',
        ]);
    }
}