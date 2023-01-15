<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //permet d'afficher la page html form.blade.php
    public function ShowFormCategory(){
        return view('form');
    }

    //permet d'ajouter les données dans la base
    //les données se trouvent dans Request
    public function AddCategory(Request $request){
        //traitement d'ajout
        $c = new Category();

        //static data
        // $c->name = "Sport";
       // $c->description = "Description Sport";

        //dd => diedump => executer et terminer(affichage request)
        //nom est le nom dans le formulaire //description est le nom dans le formulaire
        //dd($request->nom, $request->description); 

        $c->name = $request->nom;
        $c->description = $request->description;

        //return va etre exécutée lorsque l'ajout est terminée avec succès

        if($c->save()){
            return 'Catégorie Ajoutée Avec Succès';
        }else{
            return 'Erreur d\'ajout de la Catégorie';
        }

    }

    

}
