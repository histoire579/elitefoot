<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StatistiqueJoueur;
use App\Models\Competition;
use App\Models\Saison;
use App\Models\Matche;
use App\Models\Club;
use App\Models\DetailClubSaison;
use App\Models\DetailCompetitionSaison;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StatistiqueJoueurImport;
use Illuminate\Http\Request;

class StatistiqueJoueurController extends Controller
{

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statistiqueJoueur=StatistiqueJoueur::with('match','saison','joueur')->get();
        return view('admin.page.statistiqueJoueur.index')->with('statistiques',$statistiqueJoueur);
    }

    public function getJoueur(Request $request)
    {
        return $joueur= DetailClubSaison::with('joueur','poste')->where('saison_id',$request->saison_id)->where('club_id',$request->club_id)->get();
        
    }

    public function getJoueurByClub(Request $request)
    {
        $joueur= DetailClubSaison::with('joueur','saison','club')->where('saison_id',$request->saison_id)->where('club_id',$request->club_id)->get();
        $match=Matche::find($request->match_id);
        $saison=Saison::orderBy('created_at','desc')->get();
        $competition=Competition::all();
        return view('admin.page.statistiqueJoueur.liste')->with('saisons',$saison)
                    ->with('competitions',$competition)->with('joueurs',$joueur)->with('match',$match);
    }

    public function Add()
    {
        $saison=Saison::orderBy('created_at','desc')->get();
        $club=Club::orderBy('nom','asc')->get();
        $competition=Competition::all();
        return view('admin.page.statistiqueJoueur.add')->with('saisons',$saison)
                    ->with('competitions',$competition);
    }

    public function Liste()
    {
        $joueur=DetailClubSaison::with('joueur','saison','club')->take(0)->get();;
        $saison=Saison::orderBy('created_at','desc')->get();
        $club=Club::orderBy('nom','asc')->get();
        $competition=Competition::all();
        return view('admin.page.statistiqueJoueur.liste')->with('saisons',$saison)
                    ->with('competitions',$competition)->with('joueurs',$joueur);
    }

    public function Import(Request $request)
    {
        //$data=$request->all();
        //dd($request->file('stats'));
        Excel::import(new StatistiqueJoueurImport, $request->file('stats')->getRealPath());
        return redirect()->route('administration.statistique-joueur')->with('success','Enregistrer avec succès!');
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
        $statistiqueJoueur=new StatistiqueJoueur();
        $statistiqueJoueur->saison_id=$request->saison_id;
        $statistiqueJoueur->match_id=$request->match_id;

        $statistiqueJoueur->joueur_id=$request->joueur_id;
        $statistiqueJoueur->tir=$request->tir;

        $statistiqueJoueur->tir_cadre=$request->tir_cadre;
        $statistiqueJoueur->but_marque=$request->but_marque;

        $statistiqueJoueur->passe_decisive=$request->passe_decisive;
        $statistiqueJoueur->ballon_recupere=$request->ballon_recupere;

        $statistiqueJoueur->ballon_intercepte=$request->ballon_intercepte;
        $statistiqueJoueur->tir_arrete=$request->tir_arrete;

        $statistiqueJoueur->but_encaisse=$request->but_encaisse;
        $statistiqueJoueur->faute_comise=$request->faute_comise;

        $statistiqueJoueur->hors_jeux=$request->hors_jeux;
        $statistiqueJoueur->minute_jouer=$request->minute_jouer;

        $statistiqueJoueur->faute_subis=$request->faute_subis;
        $statistiqueJoueur->carton_jaune=$request->carton_jaune;

        $statistiqueJoueur->carton_rouge=$request->carton_rouge;
        $statistiqueJoueur->centre=$request->centre;

        $statistiqueJoueur->penelty_marque=$request->penelty_marque;
        $statistiqueJoueur->Coup_franc_marque=$request->Coup_franc_marque;

        $statistiqueJoueur->passe_reussi=$request->passe_reussi;
        $statistiqueJoueur->penalty_arrete=$request->penalty_arrete;

        $statistiqueJoueur->penalty_concede=$request->penalty_concede;
        $statistiqueJoueur->but_contre_camp=$request->but_contre_camp;

        $statistiqueJoueur->homme_match=$request->homme_match;
        $statistiqueJoueur->domiciliation=$request->domiciliation;

        
        $statistiqueJoueur->save();

        if ($statistiqueJoueur) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        } else {
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StatistiqueJoueur  $statistiqueJoueur
     * @return \Illuminate\Http\Response
     */
    public function show(StatistiqueJoueur $statistiqueJoueur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StatistiqueJoueur  $statistiqueJoueur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saison=Saison::orderBy('created_at','desc')->get();
        $club=Club::orderBy('nom','asc')->get();
        $competition=Competition::all();
        $matche=Matche::orderBy('created_at','desc')->get();

        $joueur= DetailClubSaison::with('joueur','poste')->get();

        $statistiqueJoueur=StatistiqueJoueur::find($id);
        return view('admin.page.statistiqueJoueur.update')->with('saisons',$saison)->with('club',$club)->with('joueurs',$joueur)
                    ->with('competitions',$competition)->with('statistique',$statistiqueJoueur)->with('matchs',$matche);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StatistiqueJoueur  $statistiqueJoueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $statistiqueJoueur=StatistiqueJoueur::find($id);
        $statistiqueJoueur->saison_id=$request->saison_id;
        $statistiqueJoueur->match_id=$request->match_id;

        $statistiqueJoueur->joueur_id=$request->joueur_id;
        $statistiqueJoueur->tir=$request->tir;

        $statistiqueJoueur->tir_cadre=$request->tir_cadre;
        $statistiqueJoueur->but_marque=$request->but_marque;

        $statistiqueJoueur->passe_decisive=$request->passe_decisive;
        $statistiqueJoueur->ballon_recupere=$request->ballon_recupere;

        $statistiqueJoueur->ballon_intercepte=$request->ballon_intercepte;
        $statistiqueJoueur->tir_arrete=$request->tir_arrete;

        $statistiqueJoueur->but_encaisse=$request->but_encaisse;
        $statistiqueJoueur->faute_comise=$request->faute_comise;

        $statistiqueJoueur->hors_jeux=$request->hors_jeux;
        $statistiqueJoueur->minute_jouer=$request->minute_jouer;

        $statistiqueJoueur->faute_subis=$request->faute_subis;
        $statistiqueJoueur->carton_jaune=$request->carton_jaune;

        $statistiqueJoueur->carton_rouge=$request->carton_rouge;
        $statistiqueJoueur->centre=$request->centre;

        $statistiqueJoueur->penelty_marque=$request->penelty_marque;
        $statistiqueJoueur->Coup_franc_marque=$request->Coup_franc_marque;

        $statistiqueJoueur->passe_reussi=$request->passe_reussi;
        $statistiqueJoueur->penalty_arrete=$request->penalty_arrete;

        $statistiqueJoueur->penalty_concede=$request->penalty_concede;
        $statistiqueJoueur->but_contre_camp=$request->but_contre_camp;

        $statistiqueJoueur->homme_match=$request->homme_match;
        $statistiqueJoueur->domiciliation=$request->domiciliation;

        
        $statistiqueJoueur->save();

        if ($statistiqueJoueur) {
            return redirect()->route('administration.statistique-joueur')->with('success','Enregistrer avec succès!');
        } else {
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StatistiqueJoueur  $statistiqueJoueur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $statistiqueJoueur=StatistiqueJoueur::find($id);
        
        $statistiqueJoueur->delete();
        if ($statistiqueJoueur){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
