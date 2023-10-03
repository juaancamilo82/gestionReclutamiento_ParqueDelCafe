<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show()
    {
        // Acceder a la vista
        return view('auth.register');
    }
}
