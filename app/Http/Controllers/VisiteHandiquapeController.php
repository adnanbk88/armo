<?php

namespace App\Http\Controllers;

use App\Models\visite;
use Illuminate\Http\Request;

class VisiteHandiquapeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Handiquape()
    {
       
        return view('infermiere.VisiteHandiquape');
    }
    public function store(Request $request)
    {

       
        $visite = visite::where("matricule", $request->matricule)->first();

        $visite->typehandicap = $request->typehandicap;
        $visite->maladie = $request->maladie;
        $visite->mesureprise = $request->mesureprise;
        
       
        $visite->save();
        return redirect('/infermiere/VisiteHandiquape');

    }
}
