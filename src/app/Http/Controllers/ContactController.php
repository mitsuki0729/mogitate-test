<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    //
     public function index()
    {
        return view('register');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'price', 'season', 'content']);
        return view('productldupdate', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'price', 'season', 'content']);
        Contact::create($contact);
        return view('index');
    }
}


