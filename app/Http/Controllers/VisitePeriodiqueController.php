<?php

namespace App\Http\Controllers;

use App\Models\visite;
use Illuminate\Http\Request;

class VisitePeriodiqueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Periodique()
    {
       
        return view('infermiere.VisitePeriodique');
    }
    public function store(Request $request)
    {

       
        $visite = visite::where("matricule", $request->matricule)->first();

        $visite->visite2021 = $request->visite2021;
        $visite->audio2021 = $request->audio2021;
        $visite->radio2021 = $request->radio2021;
        $visite->aptitudephysique = $request->aptitudephysique;
        $visite->remarquemedecin = $request->remarquemedecin;
        
       
        $visite->save();
        return redirect('/infermiere/VisitePeriodique');

    }
}
