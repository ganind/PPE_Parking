<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        return 'Le nom est ' . $request->input('nom');
    }
}
