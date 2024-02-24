<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use App\Models\Equipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoueurController extends Controller
{
   //Q8
    public function joueur30()
    {
        $joueurs = DB::table('joueurs')->where('age', '>=',  30)->get();
        return view('joueur.joueur',compact( 'joueurs')); 
    }

    //Q9
    public function joueurButPostOrigin()
    {
        $joueurs = DB::table('joueurs')
            ->where('gols', '>=',  15)
            ->where('post', 'Milieu')
            ->where('nationalite', 'Argentine')
            ->get();
        return view('joueur.joueur',compact( 'joueurs')); 

    }
    //Q13

 public function topButeursParEquipe()
    {
        $toptroisButeurEquipe = DB::table('joueurs')
            ->join('equipes', 'joueurs.equipe_id', '=', 'equipes.id')
            ->select('equipes.nom as equipe_nom', 'joueurs.nom', 'joueurs.prenom', 'joueurs.gols')
            ->orderBy('gols', 'desc')
            ->get()
            ->groupBy('equipe_nom')
            ->map(function ($joueurs) {
                return $joueurs->take(3);
            });

        return view('joueur.top_buteurs_equipe', compact( 'toptroisButeurEquipe'));
    }
//Q14
public function topButeurs()
{
    $toptrois = DB::table('joueurs')
    ->select('nom', 'prenom', 'gols')
    ->orderBy('gols', 'desc')
    ->take(3)
    ->get();
    return view('joueur.top_buteurs', compact( 'toptrois'));

}
//Q15
public function joueurParAge()
{
    $joueurParAge = DB::table('joueurs')
        ->join('equipes', 'joueurs.equipe_id', '=', 'equipes.id')
        ->select('equipes.nom as equipe_nom', 'joueurs.nom', 'joueurs.prenom', 'joueurs.age')
        ->orderBy('age', 'asc')
        ->get()
        ->groupBy('equipe_nom');

    return view('joueur.agejoueur', compact( 'joueurParAge'));
}
}
