<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class CadastroAnimal extends Controller
{
    

    function CadastroAnimal(Request $request){
       
        $animal = new Animal();
        $animal->create($request->all());

        return view('cadastroanimal');
    }
}

