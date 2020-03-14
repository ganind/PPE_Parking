<?php

namespace App\Http\Controllers;

use App\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //verification si l'utilisateur porte le droit d'admin
        $user = Auth::user();
        //Log::error('passage dans le middleware admin'.$user);
        if ($user && $user->admin === 1) {
            return view('admin.home');
        }
        return view('home');
    }
}
