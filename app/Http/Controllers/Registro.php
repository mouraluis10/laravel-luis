<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class Registro extends Controller
{

    function criarConta(Request $request){
       
        $usuario = new Usuario();
        $usuario->create($request->all());

        return view('registro');
    }
}

