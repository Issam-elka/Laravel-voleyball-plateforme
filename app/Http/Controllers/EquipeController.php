<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Equipe;
use Illuminate\Http\Request;

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
        return view('pages.equipe.allEquipe', compact('equipes', 'continents'));
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
        // $continent = new Continent;
        $store->nom = $request->nom;
        $store->ville = $request->ville;
        $store->pays = $request->pays;
        $store->maxJoueurs = $request->maxJoueurs;
        // $continent->nom_continent = $request->nom_continent;
        // $continent->save();
        // $store->continent_id = $continent->id;
        $store->continent_id = $request->continent_id;
        $store->save();
        return redirect('/equipe');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
        //
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
        return redirect('/equipe');
    }
}
