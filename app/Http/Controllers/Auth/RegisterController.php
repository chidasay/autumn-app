<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(Request $request)
    {
        // Create user registration logic here
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Store user registration logic here
    }
}
