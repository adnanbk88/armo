<?php

namespace App\Http\Controllers;

use App\Models\visite;
use Illuminate\Http\Request;

class VisiteAmbaucheController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Ambauche()
    {
       
        return view('infermiere.VisiteAmbauche');
    }
    public function store(Request $request)
    {

       
        $visite = visite::where("matricule", $request->matricule)->first();

        $visite->dateinitialaudio = $request->dateinitialaudio;
        $visite->dateapres6mois = $request->dateapres6mois;
        $visite->visite2020 = $request->visite2020;
        $visite->visite2021 = $request->visite2021;
        $visite->aptitudephysique = $request->aptitudephysique;
        $visite->remarquemedecin = $request->remarquemedecin;
        
       
        $visite->save();
        return redirect('/infermiere/VisiteAmbauche');

    }

}
