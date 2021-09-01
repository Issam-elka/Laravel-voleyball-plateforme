<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::all();
        $continents = Continent::all();
        return view('pages.equipe.createEquipe', compact('equipes', 'continents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Equipe;
        $store->nom = $request->nom;
        $store->ville = $request->ville;
        $store->pays = $request->pays;
        $store->maxJoueurs = $request->maxJoueurs;
        $store->continent_id = $request->continent_id;
        $store->save();
        return redirect('/equipe')->with('message', "IT'S REGISTERED!");
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showequipe = Equipe::find('$id');
        $showjoueur = Joueur::all();
        $roles = Role::all();
        return view('pages.equipe.show', compact('showjoueur', 'roles',  'showequipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Equipe::find($id);
        $continents = Continent::all();
        return view('pages.equipe.editEquipe', compact('edit', 'continents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Equipe::find($id);
        $update->nom = $request->nom;
        $update->ville = $request->ville;
        $update->pays = $request->pays;
        $update->maxJoueurs = $request->maxJoueurs;
        $update->continent_id = $request->continent_id;
        $update->save();
        return redirect('/equipe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Equipe::find($id);
        $destroy->delete();
        return redirect('/equipe')->with('messageDelete', "IT'S DELETED!");
    }
}
