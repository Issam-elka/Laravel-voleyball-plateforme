<?php

use App\Http\Controllers\ContinentController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\JoueurController;
use App\Models\Continent;
use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
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
    $equipes = Equipe::all();
    $joueurs= Joueur::all();
    $roles = Role::all();
    $photos = Photo::all();
    $teamEurope =$equipes->where("continent_id", "!==", 1);
    $horsEurope =$equipes->where("continent_id", "==", 1);
    $femme = $joueurs->where("genre", "=", "Femme");
    $homme = $joueurs->where("genre", "=", "Homme");
    $hommeRand = $homme->where("equipe_id", "!=", null);
    $femmeRand = $femme->where("equipe_id", "!=", null);
    return view('welcome', compact('equipes', 'femme', 'homme', 'hommeRand', 'femmeRand',  'joueurs', 'roles', 'photos', 'teamEurope', 'horsEurope'));
});

Route::get('/equipes', function(){
    $equipes = Equipe::all();
    $joueurs= Joueur::all();
    $roles = Role::all();
    return view('pages.equipe.allEquipe', compact('equipes', 'joueurs', 'roles'));
});
Route::get('/joueurs', function(){
    $joueurs = Joueur::all();
    $equipes = Equipe::all();
    return view('pages.joueurs.allJoueur', compact('joueurs', 'equipes'));
});




Route::resource('equipe', EquipeController::class);
// Route::get('/equipe/{id}/show', [EquipeController::class, 'show']);

Route::resource('continent', ContinentController::class);
Route::resource('joueur', JoueurController::class);

