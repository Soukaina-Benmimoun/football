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
    Route::get('/equipe/listZ',  'listEquipeZambia')->name('equipez.list');
    Route::get('/equipe/create', 'createEquipe')->name('equipe.create');
    Route::post('/equipe/store','storeEquipe')->name('equipe.store');
    Route::get("/equipe/{id}/edit",'editEquipe')->name("equipe.edit");
    Route::put("/equipe/{id}/update","updateEquipe")->name("equipe.update");
    Route::delete("/equipe/{id}","destroyEquipe")->name("equipe.destroy");
    Route::get('/equipe/listJoueur', 'listJoueur')->name('joueur.list');
    Route::get('/equipe/listEquipeMexico','listEquipeMexico')->name('listEquipeMexico');
});

Route::group(['controller'=> JoueurController::class], function(){
    Route::get('/joueur/age', 'joueur30')->name('joueur.age');
    Route::get('/joueur/post', 'joueurButPostOrigin')->name('joueur.post');

});
