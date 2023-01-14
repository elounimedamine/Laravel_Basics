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


}
