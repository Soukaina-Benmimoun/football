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
        $joueurs = Joueur::with('equipe')
        ->select('equipe_id', 'nom','prenom', DB::raw('SUM(gols) as total_buts'))
        ->groupBy('equipe_id', 'nom','prenom')
        ->orderBy('total_buts', 'desc')
        ->get();

    $troisPremiersButeursParEquipe = [];
    foreach ($joueurs as $joueur) {
        if (!isset($troisPremiersButeursParEquipe[$joueur->equipe_id])) {
            $troisPremiersButeursParEquipe[$joueur->equipe_id] = [
                'equipe' => $joueur->equipe->nom, 
                'joueurs' => [],
            ];
        }
        if (count($troisPremiersButeursParEquipe[$joueur->equipe_id]['joueurs']) <   3) {
            $troisPremiersButeursParEquipe[$joueur->equipe_id]['joueurs'][] = $joueur;
        }
    }
    return view('joueur.top_buteurs_equipe', ['troisPremiersButeursParEquipe' => $troisPremiersButeursParEquipe]);
 }
//Q14
public function topButeurs()
{
    
}

}
