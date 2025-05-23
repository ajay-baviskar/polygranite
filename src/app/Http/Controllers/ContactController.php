<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

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

        return redirect()->route('contact')->with('success', 'Message sent successfully!');
    }

    public function list(Request $request)
    {
        $sort = $request->query('sort', 'created_at');
        $dir = $request->query('dir', 'desc');
        $contacts = Contact::orderBy($sort, $dir)->paginate(10);
        return view('contact-list', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return response()->json($contact);
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contact.list')->with('success', 'Contact submission deleted successfully!');
    }
}
