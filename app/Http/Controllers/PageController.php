<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Controller => permet de regrouper tous les fonctions dans le meme fichier

    public function afficherpage1(){
        return view('page1'); //nom du page est page1
    }

    public function afficherpage2() {
        return view('page2'); //nom du page est page2
    }

    public function donnes(){

        $name = "Amine";
        $age = 22;

        $tables = ["Ala", "Driss", "Marzoug", 0, 1];


        return view('donnes.index')->with('namevariable', $name)->with('agevar', $age)->with('tablesarray', $tables); //nom du page est index dans le dossier donnes
    }


}
