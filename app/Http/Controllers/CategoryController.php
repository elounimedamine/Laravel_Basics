<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function AddCategory(){

        //traitement d'ajout
        $c = new Category();

        $c->name = "Sport";
        $c->description = "Description Sport";

        $c->save();


        return 'Catégorie Ajoutée Avec Succès';
    }

}
