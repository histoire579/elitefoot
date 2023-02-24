<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TchatController;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});

// Route::get('/', [App\Http\Controllers\Web\ArbitreController::class, 'index_arbitre_one'])->name('arbitre_elite_one');
Route::get('/', [App\Http\Controllers\AcceuilController::class, 'index'])->name('accueil');

//*************Elite 1

//Joueur
Route::get('/elite1/joueur_one', [App\Http\Controllers\Web\JoueurController::class, 'index_joueur_one'])->name('joueur_elite_one');
Route::get('/elite1/joueur_by_club_one', [App\Http\Controllers\Web\JoueurController::class, 'joueur_by_club_one'])->name('joueur_by_club_one');
Route::get('/elite1/detail_joueur_one/{saison_id}/{joueur_id}', [App\Http\Controllers\Web\DetailJoueurController::class, 'index_elite_one'])->name('detail_joueur_elite_one');
Route::get('/elite1/joueur_domiciliation_one', [App\Http\Controllers\Web\DetailJoueurController::class, 'joueur_domiciliation_one'])->name('joueur_domiciliation_one');

//Club
Route::get('/elite1/club_one', [App\Http\Controllers\Web\ClubController::class, 'index_club_one'])->name('club_elite_one');
Route::get('/elite1/club_journee_one', [App\Http\Controllers\Web\ClubController::class, 'club_by_journee_one'])->name('club_journee_elite_one');
Route::get('/elite1/detail_club_one/{club_id}', [App\Http\Controllers\Web\DetailClubController::class, 'index_elite_one'])->name('detail_club_elite_one');

//Arbitre
Route::get('/elite1/arbitre_one', [App\Http\Controllers\Web\ArbitreController::class, 'index_arbitre_one'])->name('arbitre_elite_one');

//*************Elite 2

//Joueur
Route::get('/elite2/joueur_two', [App\Http\Controllers\Web\JoueurController::class, 'index_joueur_two'])->name('joueur_elite_two');
Route::get('/elite2/joueur_by_club_two', [App\Http\Controllers\Web\JoueurController::class, 'joueur_by_club_two'])->name('joueur_by_club_two');
Route::get('/elite2/detail_joueur_two/{saison_id}/{joueur_id}', [App\Http\Controllers\Web\DetailJoueurController::class, 'index_elite_two'])->name('detail_joueur_elite_two');
Route::get('/elite2/joueur_domiciliation_two', [App\Http\Controllers\Web\DetailJoueurController::class, 'joueur_domiciliation_two'])->name('joueur_domiciliation_two');

//Club
Route::get('/elite2/club_two', [App\Http\Controllers\Web\ClubController::class, 'index_club_two'])->name('club_elite_two');
Route::get('/elite2/club_journee_two', [App\Http\Controllers\Web\ClubController::class, 'club_by_journee_two'])->name('club_journee_elite_two');
Route::get('/elite2/detail_club_two/{club_id}', [App\Http\Controllers\Web\DetailClubController::class, 'index_elite_two'])->name('detail_club_elite_two');

//Arbitre
Route::get('/elite2/arbitre_two', [App\Http\Controllers\Web\ArbitreController::class, 'index_arbitre_two'])->name('arbitre_elite_two');

//************Guinness

//Joueur
Route::get('/guinness/joueur_guinness', [App\Http\Controllers\Web\JoueurController::class, 'index_joueur_guinness'])->name('joueur_elite_guinness');
Route::get('/guinness/joueur_by_club_guinness', [App\Http\Controllers\Web\JoueurController::class, 'joueur_by_club_guinness'])->name('joueur_by_club_guinness');
Route::get('/guinness/detail_joueur_guinness/{saison_id}/{joueur_id}', [App\Http\Controllers\Web\DetailJoueurController::class, 'index_elite_guinness'])->name('detail_joueur_elite_guinness');
Route::get('/guinness/joueur_domiciliation_guinness', [App\Http\Controllers\Web\DetailJoueurController::class, 'joueur_domiciliation_guinness'])->name('joueur_domiciliation_guinness');

//Club
Route::get('/guinness/club_guinness', [App\Http\Controllers\Web\ClubController::class, 'index_club_guinness'])->name('club_elite_guinness');
Route::get('/guinness/club_journee_guinness', [App\Http\Controllers\Web\ClubController::class, 'club_by_journee_guinness'])->name('club_journee_elite_guinness');
Route::get('/guinness/detail_club_guinness/{club_id}', [App\Http\Controllers\Web\DetailClubController::class, 'index_elite_guinness'])->name('detail_club_elite_guinness');

//Arbitre
Route::get('/guinness/arbitre_guinness', [App\Http\Controllers\Web\ArbitreController::class, 'index_arbitre_guinness'])->name('arbitre_elite_guinness');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/elite1/calendrier', function () {
    return view('front.elite1.calendrier');
});

Route::namespace('App\Http\Controllers\Admin')->group(function () {
    //login
    Route::get('/administration', function () {
        return redirect('/administration/login');
    });
    Route::get('/administration/login', 'Auth\LoginController@showLoginForm')->name('administration.login');
    Route::post('/administration/login', 'Auth\LoginController@login');
    Route::get('/administration/home', 'AdminController@index')->name('administration.home');
    //logout
    Route::post('/administration/logout', 'Auth\LoginController@logout')->name('administration.logout');
    //register
    Route::get('/administration/register', 'Auth\RegisterController@showRegistrationForm')->name('administration.register');
    Route::post('/administration/register', 'Auth\RegisterController@register');

     //competition
     Route::get('/administration/competition','CompetitionController@index')->name('administration.competition');
     Route::post('/administration/competition','CompetitionController@store');
     Route::get('/administration/competition/add','CompetitionController@Add')->name('administration.competition-add');
     Route::get('/administration/competition/edit/{id}','CompetitionController@edit')->name('administration.competition.edit');
     Route::post('/administration/competition/edit/{id}','CompetitionController@update');
     Route::get('/administration/competition/destroy/{id}','CompetitionController@destroy')->name('administration.competition.delete');

     //saison
     Route::get('/administration/saison','SaisonController@index')->name('administration.saison');
     Route::post('/administration/saison','SaisonController@store');
     Route::get('/administration/saison/add','SaisonController@Add')->name('administration.saison-add');
     Route::get('/administration/saison/edit/{id}','SaisonController@edit')->name('administration.saison.edit');
     Route::post('/administration/saison/edit/{id}','SaisonController@update');
     Route::get('/administration/saison/destroy/{id}','SaisonController@destroy')->name('administration.saison.delete');

     //stade
     Route::get('/administration/stade','StadeController@index')->name('administration.stade');
     Route::post('/administration/stade','StadeController@store');
     Route::get('/administration/stade/add','StadeController@Add')->name('administration.stade-add');
     Route::get('/administration/stade/edit/{id}','StadeController@edit')->name('administration.stade.edit');
     Route::post('/administration/stade/edit/{id}','StadeController@update');
     Route::get('/administration/stade/destroy/{id}','StadeController@destroy')->name('administration.stade.delete');

     //poste
     Route::get('/administration/poste','PosteController@index')->name('administration.poste');
     Route::post('/administration/poste','PosteController@store');
     Route::get('/administration/poste/add','PosteController@Add')->name('administration.poste-add');
     Route::get('/administration/poste/edit/{id}','PosteController@edit')->name('administration.poste.edit');
     Route::post('/administration/poste/edit/{id}','PosteController@update');
     Route::get('/administration/poste/destroy/{id}','PosteController@destroy')->name('administration.poste.delete');

    //actualite
    Route::get('/administration/actualite','ActualiteController@index')->name('administration.actualite');
    Route::post('/administration/actualite','ActualiteController@store');
    Route::get('/administration/actualite/add','ActualiteController@Add')->name('administration.actualite-add');
    Route::get('/administration/actualite/edit/{id}','ActualiteController@edit')->name('administration.actualite.edit');
    Route::post('/administration/actualite/edit/{id}','ActualiteController@update');
    Route::get('/administration/actualite/destroy/{id}','ActualiteController@destroy')->name('administration.actualite.delete');

    //pub
    Route::get('/administration/pub','PubController@index')->name('administration.pub');
    Route::post('/administration/pub','PubController@store');
    Route::get('/administration/pub/add','PubController@Add')->name('administration.pub-add');
    Route::get('/administration/pub/edit/{id}','PubController@edit')->name('administration.pub.edit');
    Route::post('/administration/pub/edit/{id}','PubController@update');
    Route::get('/administration/pub/destroy/{id}','PubController@destroy')->name('administration.pub.delete');

    //partenaire
    Route::get('/administration/partenaire','PartenaireController@index')->name('administration.partenaire');
    Route::post('/administration/partenaire','PartenaireController@store');
    Route::get('/administration/partenaire/add','PartenaireController@Add')->name('administration.partenaire-add');
    Route::get('/administration/partenaire/edit/{id}','PartenaireController@edit')->name('administration.partenaire.edit');
    Route::post('/administration/partenaire/edit/{id}','PartenaireController@update');
    Route::get('/administration/partenaire/destroy/{id}','PartenaireController@destroy')->name('administration.partenaire.delete');

    //arbitre
    Route::get('/administration/arbitre','ArbitreController@index')->name('administration.arbitre');
    Route::post('/administration/arbitre','ArbitreController@store');
    Route::get('/administration/arbitre/add','ArbitreController@Add')->name('administration.arbitre-add');
    Route::get('/administration/arbitre/edit/{id}','ArbitreController@edit')->name('administration.arbitre.edit');
    Route::post('/administration/arbitre/edit/{id}','ArbitreController@update');
    Route::get('/administration/arbitre/destroy/{id}','ArbitreController@destroy')->name('administration.arbitre.delete');

    //boutique
    Route::get('/administration/boutique','BoutiqueController@index')->name('administration.boutique');
    Route::post('/administration/boutique','BoutiqueController@store');
    Route::get('/administration/boutique/add','BoutiqueController@Add')->name('administration.boutique-add');
    Route::get('/administration/boutique/edit/{id}','BoutiqueController@edit')->name('administration.boutique.edit');
    Route::post('/administration/boutique/edit/{id}','BoutiqueController@update');
    Route::get('/administration/boutique/destroy/{id}','BoutiqueController@destroy')->name('administration.boutique.delete');

    //joueur
    Route::get('/administration/joueur','JoueurController@index')->name('administration.joueur');
    Route::post('/administration/joueur','JoueurController@store');
    Route::get('/administration/joueur/add','JoueurController@Add')->name('administration.joueur-add');
    Route::get('/administration/joueur/edit/{id}','JoueurController@edit')->name('administration.joueur.edit');
    Route::post('/administration/joueur/edit/{id}','JoueurController@update');
    Route::get('/administration/joueur/destroy/{id}','JoueurController@destroy')->name('administration.joueur.delete');

    //poule
    Route::get('/administration/poule','PouleController@index')->name('administration.poule');
    Route::post('/administration/poule','PouleController@store');
    Route::get('/administration/poule/add','PouleController@Add')->name('administration.poule-add');
    Route::get('/administration/poule/edit/{id}','PouleController@edit')->name('administration.poule.edit');
    Route::post('/administration/poule/edit/{id}','PouleController@update');
    Route::get('/administration/poule/destroy/{id}','PouleController@destroy')->name('administration.poule.delete');

    //journee
    Route::get('/administration/journee','JourneeController@index')->name('administration.journee');
    Route::post('/administration/journee','JourneeController@store');
    Route::get('/administration/journee/add','JourneeController@Add')->name('administration.journee-add');
    Route::get('/administration/journee/edit/{id}','JourneeController@edit')->name('administration.journee.edit');
    Route::post('/administration/journee/edit/{id}','JourneeController@update');
    Route::get('/administration/journee/destroy/{id}','JourneeController@destroy')->name('administration.journee.delete');

    //pays
    Route::get('/administration/pays','PaysController@index')->name('administration.pays');
    Route::post('/administration/pays','PaysController@store');
    Route::get('/administration/pays/add','PaysController@Add')->name('administration.pays-add');
    Route::get('/administration/pays/edit/{id}','PaysController@edit')->name('administration.pays.edit');
    Route::post('/administration/pays/edit/{id}','PaysController@update');
    Route::get('/administration/pays/destroy/{id}','PaysController@destroy')->name('administration.pays.delete');

    //club
    Route::get('/administration/club','ClubController@index')->name('administration.club');
    Route::post('/administration/club','ClubController@store');
    Route::get('/administration/club/add','ClubController@Add')->name('administration.club-add');
    Route::get('/administration/club/edit/{id}','ClubController@edit')->name('administration.club.edit');
    Route::post('/administration/club/edit/{id}','ClubController@update');
    Route::get('/administration/club/destroy/{id}','ClubController@destroy')->name('administration.club.delete');

    Route::get('/administration/detail-competion-saison','DetailSompetionSaisonController@index')->name('administration.detail-competion-saison');
    Route::post('/administration/detail-competion-saison','DetailSompetionSaisonController@store');
    Route::get('/administration/detail-competion-saison/add','DetailSompetionSaisonController@Add')->name('administration.detail-competion-saison-add');
    Route::get('/administration/detail-competion-saison/edit/{id}','DetailSompetionSaisonController@edit')->name('administration.detail-competion-saison.edit');
    Route::post('/administration/detail-competion-saison/edit/{id}','DetailSompetionSaisonController@update');
    Route::get('/administration/detail-competion-saison/destroy/{id}','DetailSompetionSaisonController@destroy')->name('administration.detail-competion-saison.delete');

    //effectif
    Route::get('/administration/effectif','EffectifController@index')->name('administration.effectif');
    Route::post('/administration/effectif','EffectifController@store');
    Route::get('/administration/effectif/add','EffectifController@Add')->name('administration.effectif-add');
    Route::get('/administration/effectif/edit/{id}','EffectifController@edit')->name('administration.effectif.edit');
    Route::post('/administration/effectif/edit/{id}','EffectifController@update');
    Route::get('/administration/effectif/destroy/{id}','EffectifController@destroy')->name('administration.effectif.delete');

     //match
     Route::get('/administration/match','MatchController@index')->name('administration.match');
     Route::get('/administration/getClub','MatchController@getClub')->name('administration.getClub');
     Route::get('/administration/getJournee','MatchController@getJournee')->name('administration.getJournee');
     Route::get('/administration/getPhase','MatchController@getPhase')->name('administration.getPhase');
     Route::post('/administration/match','MatchController@store');
     Route::get('/administration/match/add','MatchController@Add')->name('administration.match-add');
     Route::get('/administration/match/edit/{id}','MatchController@edit')->name('administration.match.edit');
     Route::post('/administration/match/edit/{id}','MatchController@update');
     Route::get('/administration/match/destroy/{id}','MatchController@destroy')->name('administration.match.delete');

     //effectif
    Route::get('/administration/feuille','FeuilleMatchController@index')->name('administration.feuille');
    Route::get('/administration/getEffectif','FeuilleMatchController@getEffectif')->name('administration.getEffectif');

    Route::get('/administration/getFeuille/{match_id}/{club1_id}/{club2_id}','FeuilleMatchController@getFeuille')->name('administration.getFeuille');

    Route::post('/administration/feuille','FeuilleMatchController@store');
    Route::get('/administration/feuille/add','FeuilleMatchController@Add')->name('administration.feuille-add');
    Route::get('/administration/feuille/AddFeuille','FeuilleMatchController@AddFeuille')->name('administration.feuille-AddFeuille');
    Route::get('/administration/feuille/edit/{id}','FeuilleMatchController@edit')->name('administration.feuille.edit');
    Route::post('/administration/feuille/edit/{id}','FeuilleMatchController@update');
    Route::get('/administration/feuille/destroy/{id}','FeuilleMatchController@destroy')->name('administration.feuille.delete');

    //detail-match
    Route::get('/administration/detail-match','DetailMatchController@index')->name('administration.detail-match');
    Route::get('/administration/getMatch','DetailMatchController@getMatch')->name('administration.getMatch');

    Route::get('/administration/getClubByMatch','DetailMatchController@getClubByMatch')->name('administration.getClubByMatch');

    Route::get('/administration/getDetail/{id}','DetailMatchController@getDetail')->name('administration.getDetail');
    Route::post('/administration/detail-match','DetailMatchController@store');
    Route::get('/administration/detail-match/add','DetailMatchController@Add')->name('administration.detail-match.add');
    Route::get('/administration/detail-match/edit/{id}','DetailMatchController@edit')->name('administration.detail-match.edit');
    Route::post('/administration/detail-match/edit/{id}','DetailMatchController@update');
    Route::get('/administration/detail-match/destroy/{id}','DetailMatchController@destroy')->name('administration.detail-match.delete');

    //classement
    Route::get('/administration/classement','ClassementController@index')->name('administration.classement');
    Route::post('/administration/classement','ClassementController@store');
    Route::get('/administration/classement/add','ClassementController@Add')->name('administration.classement-add');
    Route::get('/administration/classement/edit/{id}','ClassementController@edit')->name('administration.classement.edit');
    Route::post('/administration/classement/edit/{id}','ClassementController@update');
    Route::get('/administration/classement/destroy/{id}','ClassementController@destroy')->name('administration.classement.delete');

    //statistique-joueur
    Route::get('/administration/statistique-joueur','StatistiqueJoueurController@index')->name('administration.statistique-joueur');

    Route::get('/administration/statistique-joueur-liste','StatistiqueJoueurController@Liste')->name('administration.statistique-joueur-liste');

    Route::post('/administration/statistique-joueur-import','StatistiqueJoueurController@Import')->name('administration.statistique-joueur-import');

    Route::get('/administration/getJoueur','StatistiqueJoueurController@getJoueur')->name('administration.getJoueur');

    Route::get('/administration/getJoueurByClub','StatistiqueJoueurController@getJoueurByClub')->name('administration.getJoueurByClub');

    Route::post('/administration/statistique-joueur','StatistiqueJoueurController@store');
    Route::get('/administration/statistique-joueur/add','StatistiqueJoueurController@Add')->name('administration.statistique-joueur-add');
    Route::get('/administration/statistique-joueur/edit/{id}','StatistiqueJoueurController@edit')->name('administration.statistique-joueur.edit');
    Route::post('/administration/statistique-joueur/edit/{id}','StatistiqueJoueurController@update');
    Route::get('/administration/statistique-joueur/destroy/{id}','StatistiqueJoueurController@destroy')->name('administration.statistique-joueur.delete');
});

