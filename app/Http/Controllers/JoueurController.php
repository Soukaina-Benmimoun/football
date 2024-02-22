<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function joueur30()
    {
        $joueurs = DB::table('joueurs')->where('age', '>=',  30)->get();
        return view('joueur.joueur',compact( 'joueurs')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function joueurButPostOrigin()
    {
        $joueurs = DB::table('joueurs')
    ->where('gols', '>=',  15)
    ->where('post', 'Milieu')
    ->where('nationalite', 'Isle of Man')
    ->get();
    return view('joueur.joueur',compact( 'joueurs')); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Joueur $joueur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Joueur $joueur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Joueur $joueur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Joueur $joueur)
    {
        //
    }
}
