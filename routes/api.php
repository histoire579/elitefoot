<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AcceuilController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(App\Http\Controllers\AcceuilController::class)->group(function(){
    Route::get('competition','getCompetition');
    Route::get('saison','getSaison');
    Route::get('match/{competition_id}/{saison_id}','getMatch');
    Route::get('club/{competition_id}/{saison_id}','getClub');
    Route::get('joueur/{club_id}','getJoueur');
    Route::post('feuilleMatch','store');

});

Route::controller(App\Http\Controllers\Admin\FeuilleMatchController::class)->group(function(){
    Route::get('feuille','create');

});


