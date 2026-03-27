<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactMailController extends Controller
{
    public function mail(Request $request){

        $validated = $request->validate([
            'name'=> 'required|string|max:120',
            'phone' => 'required|string|max:40',
            'message' => 'required|string|max:4000',
            'brand' => 'nullable|string|max:120',
            'email' => 'nullable|email|max:190',
            'address' => 'nullable|string|max:255',
            'desired_date' => 'nullable|string|max:120',
            'source' => 'nullable|string|max:120',
        ]);

        $data = [
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'message' => $validated['message'],
            'brand' => $validated['brand'] ?? null,
            'email' => $validated['email'] ?? null,
            'address' => $validated['address'] ?? null,
            'desired_date' => $validated['desired_date'] ?? null,
            'source' => $validated['source'] ?? null,
        ];

        Mail::to('ast.mediainternational@gmail.com')->send(new ContactMail($data));

        return back()->with('success','Danke! Ihre Anfrage wurde erfolgreich gesendet.');
    }
}
