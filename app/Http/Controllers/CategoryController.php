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

        //Request Validation(Controle de saisie)
        $request->validate(
            [
                'nom' => 'required',
                'description' => 'required'
            ]
        );

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
            // return 'Catégorie Ajoutée Avec Succès';
            // redirection vers la page qui contient toutes la liste des catégories
            return redirect('/category/list')->with('msg', 'Votre Catégorie Est Ajoutée Avec Succès');;
        }else{
            return 'Erreur d\'ajout de la Catégorie';
        }

    }

    //permet d'afficher la liste des catégories
    public function liste(){

        //récupération des données appartir de la base de données(Category est le model)
        //$categories = Category::all(); pour récupérer tous les données de la base
        $categories = Category::all();

        //retourner la page avec les catégories
        return view('liste')->with('categories', $categories);
    }

    public function delete($id){

        //récuperer la catégorie selon leur id, Category => Model, find => pour rechercher
        $categorie = Category::find($id);

        //supprimer la catégorie
        if($categorie->delete()){
            return redirect('/category/list')->with('msg', 'Votre Catégorie Est Supprimée Avec Succès');
        }else{
            return 'Erreur de suppression de la Catégorie';
        }

    }



}
