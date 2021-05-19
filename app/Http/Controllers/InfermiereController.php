<?php

namespace App\Http\Controllers;

use App\Models\visite;
use Illuminate\Http\Request;

class InfermiereController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ajouter()
    {
       
        return view('infermiere.AjouterEmploye');
    }
    public function login()
    {
       
        return view('infermiere.login');
    }
    public function gestion()
    {
       
        return view('infermiere.gestionVisite');
    }
  
    public function Reprise()
    {
       
        return view('infermiere.VisiteReprise');
    }
  
    
 
  
    
    public function store(Request $request)
    {
       
        $visite = new visite();
        $visite->matricule = $request->matricule;
        $visite->nom = $request->nom;
        $visite->prenom = $request->prenom;
        $visite->sex = $request->sex;
        $visite->cin = $request->cin;
        $visite->cnss = $request->cnss;
        $visite->site = $request->site;
        $visite->section = $request->section;
        $visite->service = $request->service;
        $visite->datedeambauche = $request->datedeambauche;
        $visite->datedesortie = $request->datedesortie;
        $visite->datedenaissance = $request->datedenaissance;
        
       
        $visite->save();
        return redirect('/infermiere/AjouterEmploye');
    }
}
