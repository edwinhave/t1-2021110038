<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email',
            'phone_number' => 'required|numeric|digits_between:5,15',
        ]);

        $contact = Contact::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
        ]);
        $contact = Contact::create($validated);

        return redirect()->route('contact-us.index')->with('success', 'Thank you, we will contact you soon!');

    }
}