<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    
    function Login(){
        return view('login');
    }
}
