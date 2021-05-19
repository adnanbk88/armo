<?php

namespace App\Http\Controllers;

use App\Models\visite;
use Illuminate\Http\Request;

class VisiteGrocesseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Grocesse()
    {
       
        return view('infermiere.VisiteGrocesse');
    }
    public function store(Request $request)
    {

       
        $visite = visite::where("matricule", $request->matricule)->first();

        $visite->debutdegrocesse = $request->debutdegrocesse;
        $visite->findegrocesse = $request->findegrocesse;
        $visite->dateprevudelaprmierevisite = $request->dateprevudelaprmierevisite;
        $visite->remarquemedecinpremierevisite = $request->remarquemedecinpremierevisite;
        $visite->dateprevude2evisite = $request->dateprevude2evisite;
        $visite->remarquemedecin2evisite = $request->remarquemedecin2evisite;
     
        
       
        $visite->save();
        return redirect('/infermiere/VisiteGrocesse');

    }
}
