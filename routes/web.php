<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//3rd First Touch Video Routing
//Route::get("/page1",'PageController@afficherpage1'); => laravel7
//=> laravel9
Route::get("/page1", [App\Http\Controllers\PageController::class, 'afficherpage1']);

//4th First Controller Video Routing And Controller 
//"/page2/afficher/test" or "/page2/afficher" or "/page2" or "/page2afficher" or "/about"
// Route::get("/about",'PageController@afficherpage2'); => laravel7
//=> laravel9
Route::get("/about", [App\Http\Controllers\PageController::class, 'afficherpage2']);

