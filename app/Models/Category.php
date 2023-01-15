<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //relation entre la table 'categories' et le model 'Category'
    protected $table = 'categories'; //le nom de la table est 'categories'
}
