<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['list']);
    }

    public function index()
    {
        $services = Service::all();
        $settings = Setting::pluck('value', 'key')->toArray();
        return view('contact', compact('services', 'settings'));
    }

    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'subject' => 'required|string|max:255',
    //         'message' => 'required|string',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     Contact::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'subject' => $request->subject,
    //         'message' => $request->message,
    //     ]);

    //     return redirect()->route('contact')->with('success', 'Your message has been sent. Thank you!');
    // }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Contact::create($request->only(['name', 'email', 'subject', 'message']));
        return redirect()->route('contact')->with('success', 'Your message has been sent. Thank you!');
    }
    public function list()
    {
        $contacts = Contact::all();
        return view('contact.list', compact('contacts'));
    }
}
