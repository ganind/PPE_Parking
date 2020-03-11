<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\User;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    public function store(ContactRequest $request)
    {
        Mail::to('administrateur@chezmoi.com')
            ->send(new ContactMail($request->except('_token')));

        return view('confirm');
    }
}
