<?php

use App\Http\Controllers\JoueurController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['controller'=> EquipeController::class], function(){
    Route::get('/equipe/list', 'listEquipe')->name('equipe.list');
    Route::get('/equipe/listF',  'listEquipeFrance')->name('equipeF.list');
    Route::get('/equipe/create', 'createEquipe')->name('equipe.create');
    Route::post('/equipe/store','storeEquipe')->name('equipe.store');
    Route::get("/equipe/{id}/edit",'editEquipe')->name("equipe.edit");
    Route::put("/equipe/{id}/update","updateEquipe")->name("equipe.update");
    Route::delete("/equipe/{id}","destroyEquipe")->name("equipe.destroy");
    Route::get('/equipe/listJoueur', 'listJoueur')->name('joueur.list');
    Route::get('/equipe/listEquipEspagnole','listEquipeEspagnole')->name('listEquipeEspagnole');
    Route::get('/equipe/but','equipeBut')->name('equipe.but');
    Route::get('/golsEquipePays', 'golsEquipePays')->name('golsEquipePays');
    Route::get('/golsEquipeDef', 'golsEquipeDef')->name('golsEquipeDef');
});

Route::group(['controller'=> JoueurController::class], function(){
    Route::get('/joueur/age', 'joueur30')->name('joueur.age');
    Route::get('/joueur/post', 'joueurButPostOrigin')->name('joueur.post');
    Route::get('/joueur/top-buteurs-equipe',  'topButeursParEquipe')->name('joueur.topButeursParEquipe');
    Route::get('/joueur/top-buteurs',  'topButeurs')->name('joueur.topButeurs');
    Route::get('/joueur/joueurParAge',  'joueurParAge')->name('joueur.joueurParAge');


});
