<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Obtener la solicitud
        $request = Request::capture();

        // Acceder a la vista
        return view('home', [
            'request' => $request,
        ]);
    }
}
