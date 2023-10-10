<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasosController extends Controller
{
    public function informacion(Request $request)
    {

        $user = new User();

        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect(route('conocimientos'));
    }
}
