<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipe;
class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listEquipe()
    {
        $equipes =DB::select('SELECT * FROM equipes');
        return view( 'equipe.list', compact('equipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function listEquipeZambia()
    {
        $equipes =DB::select("SELECT * FROM equipes WHERE pays = 'Zambia'")
        ;
        return view ('equipe.list',compact('equipes'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function createEquipe()
    {
        return view('equipe.create');
    }

    /**
     * Display the specified resource.
     */
    public function storeEquipe(Request $request)
    {
        
        DB::table('equipes')->insert([
            "nom"=>$request->input("nom"), 
            "entraineur"=>$request->input("entraineur"),  
            "classement"=>$request->input("classement"), 
            "pays"=>$request->input("pays"),
            "division"=>$request->input("division")
        ]) ;
            

        return to_route('equipe.list');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editEquipe( $id)
    {
        $equipe = DB::table('equipes')->where( 'id' ,'=' ,$id)->first();
        return view('equipe.edit', compact('equipe') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateEquipe(Request $request,  $id)
    {
        DB::table('equipes')->where('id', $id)
            ->update(["nom"=>$request->input("nom"), 
            "entraineur"=>$request->input("entraineur"),  
            "classement"=>$request->input("classement"), 
            "pays"=>$request->input("pays"),
            "division"=>$request->input("division")
        ]);
        return to_route('equipe.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyEquipe(string $id)
    {
        DB::table('equipes')->where('id', $id)
        ->delete();

        return redirect()->route('equipe.list');
    }
    
    public function listJoueur(){
        $equipes = DB::table('equipes')->get();

        foreach ($equipes as $equipe) {
            $equipe->joueurs = DB::table('joueurs')->where('equipe_id', $equipe->id)->get();
        }
    
        return view('equipe.listJoueur', compact('equipes'));
    }

    public function listEquipeMexico()
    {
        $equipes =DB::table('equipes')->where('pays','Mexico')->get();
        return view( 'equipe.list', compact('equipes'));
    }

    public function equipeBut()
    {
//Q10
    $equipes = DB::table('joueurs')
        ->join('equipes', 'joueurs.equipe_id', '=', 'equipes.id')
        ->select('equipes.nom as team_name', DB::raw('SUM(joueurs.gols) as total_goals'))
        ->groupBy('equipes.nom')
        ->get();

    
        return view('equipe.butEquipe', compact('equipes'));
        
    }
//Q11
    public function golsEquipePays(){
        $goalsByTeamAndCountry = DB::table('joueurs')
            ->join('equipes', 'joueurs.equipe_id', '=', 'equipes.id')
            ->select('equipes.nom as team_name', 'equipes.pays as country', DB::raw('SUM(joueurs.gols) as total_goals'))
            ->groupBy('equipes.nom', 'equipes.pays')
            ->get();
            return view('equipe.golsEquipePays', compact('goalsByTeamAndCountry'));
    }
//Q12
    public function golsEquipeDef(){
        $golsEquipeDefs = DB::table('joueurs')
        ->join('equipes', 'joueurs.equipe_id', '=', 'equipes.id')
        ->where('joueurs.post', 'Défenseur')
        ->select('equipes.nom as team_name', DB::raw('SUM(joueurs.gols) as total_goals'))
        ->groupBy('equipes.nom')
        ->get();

    return view('equipe.golsEquipeDef', compact('golsEquipeDefs'));
    }
}
