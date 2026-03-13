<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactMailController extends Controller
{
    public function mail(Request $request){

        $request->validate([
            'name'=> 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        Mail::to('1zaidshaikh234@gmail.com')->send(new ContactMail($data));

        return back()->with('success','Message sent successfully');
    }
}
