<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssistanteController extends Controller
{
    public function login()
    {
       
        return view('assistante.login');
    }
}
