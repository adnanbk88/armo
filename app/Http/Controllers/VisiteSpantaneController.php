<?php

namespace App\Http\Controllers;

use App\Models\visite;
use Illuminate\Http\Request;

class VisiteSpantaneController extends Controller
{
    public function Spantane()
    {
       
        return view('infermiere.VisiteSpantane');
    }
    public function store(Request $request)
    {

       
        $visite = visite::where("matricule", $request->matricule)->first();

        $visite->motif = $request->motif;
        $visite->datevisitespantanée = $request->datevisitespantanée;
        $visite->remarquemedecin1 = $request->remarquemedecin1;
        
       
        $visite->save();
        return redirect('/infermiere/VisiteSpantane');

    }
}
