<?php

namespace App\Http\Controllers;

use App\Models\visite;
use Illuminate\Http\Request;

class VisiteRepriseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Reprise()
    {
       
        return view('infermiere.VisiteReprise');
    }
    public function store(Request $request)
    {

       
        $visite = visite::where("matricule", $request->matricule)->first();

        $visite->datevisitecasspecifique = $request->datevisitecasspecifique;
        $visite->motifdevisite = $request->motifdevisite;
        $visite->naturedemaladie = $request->naturedemaladie;
        $visite->remarquemedecinpendantlavisite = $request->remarquemedecinpendantlavisite;
        
       
        $visite->save();
        return redirect('/infermiere/VisiteReprise');

    }
}
