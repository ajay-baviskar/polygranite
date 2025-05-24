<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email'
        ]);

        // Assuming a Newsletter model exists
        \App\Models\Newsletter::create(['email' => $request->email]);

        return redirect()->back()->with('success', 'Subscribed successfully!');
    }
}