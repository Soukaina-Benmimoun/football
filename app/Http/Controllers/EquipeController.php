<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipe;
class EquipeController extends Controller
{
   //Q1
    public function listEquipe()
    {
        $equipes =DB::select('SELECT * FROM equipes');
        return view( 'equipe.list', compact('equipes'));
    }

    //Q2
    public function listEquipeFrance()
    {
        $equipes =DB::select("SELECT * FROM equipes WHERE pays = 'France'")
        ;
        return view ('equipe.list',compact('equipes'));

    }

   //Q3
    public function createEquipe()
    {
        return view('equipe.create');
    }

    //Q3
    public function storeEquipe(Request $request)
    {
        $nom = $request->input("nom");
        $entraineur =$request->input("entraineur"); 
        $classement = $request->input("classement");
        $division = $request->input("division");
        DB::statement("INSERT INTO equipes (nom, entraineur, classement, pays, division) VALUES (?, ?, ?, 'Italie', ?)", [$nom, $entraineur, $classement,  $division]);

        return to_route('equipe.list');
    }

    //Q4
    public function editEquipe( $id)
    {
        $equipe = DB::table('equipes')->where( 'id' ,'=' ,$id)->first();
        return view('equipe.edit', compact('equipe') );
    }

    //Q4
    public function updateEquipe(Request $request,  $id)
    {
    $nom = $request->input("nom");
    $entraineur =$request->input("entraineur"); 
    $classement = $request->input("classement");
    $pays = $request->input("pays");
    $division = $request->input("division");
    DB::statement("UPDATE equipes SET  nom = ?, entraineur = ?, classement = ? ,  pays = ? , division= ? where id=?", [$nom, $entraineur, $classement, $pays, $division,$id]);
    return to_route('equipe.list');
    }

    //Q5
    public function destroyEquipe(string $id)
    {
        DB::statement("DELETE FROM equipes WHERE id = ? ", [$id]);

        return redirect()->route('equipe.list');
    }
    //Q6
    public function listJoueur(){
        $equipes = DB::table('equipes')->get();

        foreach ($equipes as $equipe) {
            $equipe->joueurs = DB::table('joueurs')->where('equipe_id', $equipe->id)->get();
        }
    
        return view('equipe.listJoueur', compact('equipes'));
    }
    //Q7
    public function listEquipeEspagnole()
    {
        $equipes =DB::table('equipes')->where('pays','Espagnole')->get();
        return view( 'equipe.list', compact('equipes'));
        }
}
