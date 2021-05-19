<?php

namespace App\Http\Controllers;

use App\Models\visite;
use Illuminate\Http\Request;

class VisiteAudiogrammeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Audiogramme()
    {
       
        return view('infermiere.VisiteAudiogramme');
    }
    public function store(Request $request)
    {

       
        $visite = visite::where("matricule", $request->matricule)->first();

        $visite->dateinitialaudio = $request->dateinitialaudio;
        $visite->dateapres6mois = $request->dateapres6mois;
       
        $visite->remarquemedecin0 = $request->remarquemedecin0;
        
       
        $visite->save();
        return redirect('/infermiere/VisiteAudiogramme');

    }
}
