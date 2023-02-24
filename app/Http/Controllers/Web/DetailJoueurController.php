<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Joueur;
use App\Models\DetailClubSaison;
use App\Models\PalmaresJoueur;
use App\Models\StatistiqueJoueur;
use App\Models\FeuilleMatch;
use App\Models\Saison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailJoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  int  $saison_id
     * @param  int  $joueur_id
     * @return \Illuminate\Http\Response
     */
    public function index_elite_one($saison_id, $joueur_id)
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $detail_club_saison = DetailClubSaison::with('joueur','club','poste')->where([['saison_id', $saison_id], ['joueur_id', $joueur_id]])->first();
        $statistiques = DB::select('SELECT sa.libelle AS saison,COUNT(s.match_id) AS nbre_match,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.joueur_id='.$joueur_id.' GROUP BY sa.id');
        $stats = DB::select('SELECT COUNT(s.match_id) AS nbre_match,SUM(s.tir) AS tir,SUM(s.tir_cadre) AS tir_cadre,SUM(s.passe_reussi) AS passe_r,SUM(s.hors_jeux) AS hors_jeux,SUM(s.centre) AS centre,SUM(s.Coup_franc_marque) AS coup_franc_marque,SUM(s.penelty_marque) AS panalty_marque,SUM(s.penalty_arrete) AS penalty_arrete,SUM(s.penalty_concede) AS penalty_concede,SUM(s.but_encaisse) AS but_encaisse,SUM(s.but_contre_camp) AS but_contre_camp,SUM(s.ballon_recupere) AS ballon_recup,SUM(s.ballon_intercepte) AS ballon_inter,SUM(s.centre) AS centre,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe_d,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_comise) AS faute_comise,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.saison_id='.$saison_id.' AND s.joueur_id='.$joueur_id);
        $nbre_entrant = FeuilleMatch::where([['joueur_id', $joueur_id], ['titularisation', "Entrant"]])->count('id');
        $nbre_remplacant = FeuilleMatch::where([['joueur_id', $joueur_id], ['titularisation', "Remplacant"]])->count('id');
        $palmares = PalmaresJoueur::with('saison','joueur','competition')->where('joueur_id', $joueur_id)->orderBy('created_at','desc')->paginate(10);
        $saisons = Saison::orderBy('libelle','desc')->get();
        return view('elite1.detail_joueur')
        ->with('detail_club_saison', $detail_club_saison)
        ->with('statistiques', $statistiques)
        ->with('stats', $stats)
        ->with('saisons', $saisons)
        ->with('palmares', $palmares)
        ->with('nbre_entrant', $nbre_entrant)
        ->with('nbre_remplacant', $nbre_remplacant);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  int  $saison_id
     * @param  int  $joueur_id
     * @return \Illuminate\Http\Response
     */
    public function index_elite_two($saison_id, $joueur_id)
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $detail_club_saison = DetailClubSaison::with('joueur','club','poste')->where([['saison_id', $saison_id], ['joueur_id', $joueur_id]])->first();
        $statistiques = DB::select('SELECT sa.libelle AS saison,COUNT(s.match_id) AS nbre_match,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.joueur_id='.$joueur_id.' GROUP BY sa.id');
        $stats = DB::select('SELECT COUNT(s.match_id) AS nbre_match,SUM(s.tir) AS tir,SUM(s.tir_cadre) AS tir_cadre,SUM(s.passe_reussi) AS passe_r,SUM(s.hors_jeux) AS hors_jeux,SUM(s.centre) AS centre,SUM(s.Coup_franc_marque) AS coup_franc_marque,SUM(s.penelty_marque) AS panalty_marque,SUM(s.penalty_arrete) AS penalty_arrete,SUM(s.penalty_concede) AS penalty_concede,SUM(s.but_encaisse) AS but_encaisse,SUM(s.but_contre_camp) AS but_contre_camp,SUM(s.ballon_recupere) AS ballon_recup,SUM(s.ballon_intercepte) AS ballon_inter,SUM(s.centre) AS centre,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe_d,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_comise) AS faute_comise,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.saison_id='.$saison_id.' AND s.joueur_id='.$joueur_id);
        $nbre_entrant = FeuilleMatch::where([['joueur_id', $joueur_id], ['titularisation', "Entrant"]])->count('id');
        $nbre_remplacant = FeuilleMatch::where([['joueur_id', $joueur_id], ['titularisation', "Remplacant"]])->count('id');
        $palmares = PalmaresJoueur::with('saison','joueur','competition')->where('joueur_id', $joueur_id)->orderBy('created_at','desc')->paginate(10);
        $saisons = Saison::orderBy('libelle','desc')->get();
        return view('elite2.detail_joueur')
        ->with('detail_club_saison', $detail_club_saison)
        ->with('statistiques', $statistiques)
        ->with('stats', $stats)
        ->with('saisons', $saisons)
        ->with('palmares', $palmares)
        ->with('nbre_entrant', $nbre_entrant)
        ->with('nbre_remplacant', $nbre_remplacant);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  int  $saison_id
     * @param  int  $joueur_id
     * @return \Illuminate\Http\Response
     */
    public function index_elite_guinness($saison_id, $joueur_id)
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $detail_club_saison = DetailClubSaison::with('joueur','club','poste')->where([['saison_id', $saison_id], ['joueur_id', $joueur_id]])->first();
        $statistiques = DB::select('SELECT sa.libelle AS saison,COUNT(s.match_id) AS nbre_match,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.joueur_id='.$joueur_id.' GROUP BY sa.id');
        $stats = DB::select('SELECT COUNT(s.match_id) AS nbre_match,SUM(s.tir) AS tir,SUM(s.tir_cadre) AS tir_cadre,SUM(s.passe_reussi) AS passe_r,SUM(s.hors_jeux) AS hors_jeux,SUM(s.centre) AS centre,SUM(s.Coup_franc_marque) AS coup_franc_marque,SUM(s.penelty_marque) AS panalty_marque,SUM(s.penalty_arrete) AS penalty_arrete,SUM(s.penalty_concede) AS penalty_concede,SUM(s.but_encaisse) AS but_encaisse,SUM(s.but_contre_camp) AS but_contre_camp,SUM(s.ballon_recupere) AS ballon_recup,SUM(s.ballon_intercepte) AS ballon_inter,SUM(s.centre) AS centre,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe_d,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_comise) AS faute_comise,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.saison_id='.$saison_id.' AND s.joueur_id='.$joueur_id);
        $nbre_entrant = FeuilleMatch::where([['joueur_id', $joueur_id], ['titularisation', "Entrant"]])->count('id');
        $nbre_remplacant = FeuilleMatch::where([['joueur_id', $joueur_id], ['titularisation', "Remplacant"]])->count('id');
        $palmares = PalmaresJoueur::with('saison','joueur','competition')->where('joueur_id', $joueur_id)->orderBy('created_at','desc')->paginate(10);
        $saisons = Saison::orderBy('libelle','desc')->get();
        return view('guinness.detail_joueur')
        ->with('detail_club_saison', $detail_club_saison)
        ->with('statistiques', $statistiques)
        ->with('stats', $stats)
        ->with('saisons', $saisons)
        ->with('palmares', $palmares)
        ->with('nbre_entrant', $nbre_entrant)
        ->with('nbre_remplacant', $nbre_remplacant);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        //
    }
    
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function joueur_domiciliation_one(Request $request)
    {
        if($request->domiciliation == "Général")
        {
            $saisons = Saison::orderBy('libelle','desc')->get();
            $detail_club_saison = DetailClubSaison::with('joueur','club','poste')->where([['saison_id', $request->saison_id], ['joueur_id', $request->joueur_id]])->first();
            $statistiques = DB::select('SELECT sa.libelle AS saison,COUNT(s.match_id) AS nbre_match,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.joueur_id='.$request->joueur_id.' GROUP BY sa.id');
            $stats = DB::select('SELECT COUNT(s.match_id) AS nbre_match,SUM(s.tir) AS tir,SUM(s.tir_cadre) AS tir_cadre,SUM(s.passe_reussi) AS passe_r,SUM(s.hors_jeux) AS hors_jeux,SUM(s.centre) AS centre,SUM(s.Coup_franc_marque) AS coup_franc_marque,SUM(s.penelty_marque) AS panalty_marque,SUM(s.penalty_arrete) AS penalty_arrete,SUM(s.penalty_concede) AS penalty_concede,SUM(s.but_encaisse) AS but_encaisse,SUM(s.but_contre_camp) AS but_contre_camp,SUM(s.ballon_recupere) AS ballon_recup,SUM(s.ballon_intercepte) AS ballon_inter,SUM(s.centre) AS centre,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe_d,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_comise) AS faute_comise,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.saison_id='.$request->saison_id.' AND s.joueur_id='.$request->joueur_id);
            $nbre_entrant = FeuilleMatch::where([['joueur_id', $request->joueur_id], ['titularisation', "Entrant"]])->count('id');
            $nbre_remplacant = FeuilleMatch::where([['joueur_id', $request->joueur_id], ['titularisation', "Remplacant"]])->count('id');
            $palmares = PalmaresJoueur::with('saison','joueur','competition')->where('joueur_id', $request->joueur_id)->orderBy('created_at','desc')->paginate(10);
            $saisons = Saison::orderBy('libelle','desc')->get();
            return view('elite1.detail_joueur')
            ->with('detail_club_saison', $detail_club_saison)
            ->with('statistiques', $statistiques)
            ->with('stats', $stats)
            ->with('saisons', $saisons)
            ->with('palmares', $palmares)
            ->with('nbre_entrant', $nbre_entrant)
            ->with('nbre_remplacant', $nbre_remplacant);
        }
        else
        {
            $domiciliation = "";
            $domicile = $request->domiciliation;
            $domiciliation = "'".$domicile."'";
            $saisons = Saison::orderBy('libelle','desc')->get();
            $detail_club_saison = DetailClubSaison::with('joueur','club','poste')->where([['saison_id', $request->saison_id], ['joueur_id', $request->joueur_id]])->first();
            $statistiques = DB::select('SELECT sa.libelle AS saison,COUNT(s.match_id) AS nbre_match,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.joueur_id='.$request->joueur_id.' GROUP BY sa.id');
            $stats = DB::select('SELECT COUNT(s.match_id) AS nbre_match,SUM(s.tir) AS tir,SUM(s.tir_cadre) AS tir_cadre,SUM(s.passe_reussi) AS passe_r,SUM(s.hors_jeux) AS hors_jeux,SUM(s.centre) AS centre,SUM(s.Coup_franc_marque) AS coup_franc_marque,SUM(s.penelty_marque) AS panalty_marque,SUM(s.penalty_arrete) AS penalty_arrete,SUM(s.penalty_concede) AS penalty_concede,SUM(s.but_encaisse) AS but_encaisse,SUM(s.but_contre_camp) AS but_contre_camp,SUM(s.ballon_recupere) AS ballon_recup,SUM(s.ballon_intercepte) AS ballon_inter,SUM(s.centre) AS centre,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe_d,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_comise) AS faute_comise,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.saison_id='.$request->saison_id.' AND s.joueur_id='.$request->joueur_id.' AND s.domiciliation='.$domiciliation);
            $nbre_entrant = FeuilleMatch::where([['joueur_id', $request->joueur_id], ['titularisation', "Entrant"]])->count('id');
            $nbre_remplacant = FeuilleMatch::where([['joueur_id', $request->joueur_id], ['titularisation', "Remplacant"]])->count('id');
            $palmares = PalmaresJoueur::with('saison','joueur','competition')->where('joueur_id', $request->joueur_id)->orderBy('created_at','desc')->paginate(10);
            $saisons = Saison::orderBy('libelle','desc')->get();
            return view('elite1.detail_joueur')
            ->with('detail_club_saison', $detail_club_saison)
            ->with('statistiques', $statistiques)
            ->with('stats', $stats)
            ->with('saisons', $saisons)
            ->with('palmares', $palmares)
            ->with('nbre_entrant', $nbre_entrant)
            ->with('nbre_remplacant', $nbre_remplacant);
        }
    }
    
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function joueur_domiciliation_two(Request $request)
    {
        if($request->domiciliation == "Général")
        {
            $saisons = Saison::orderBy('libelle','desc')->get();
            $detail_club_saison = DetailClubSaison::with('joueur','club','poste')->where([['saison_id', $request->saison_id], ['joueur_id', $request->joueur_id]])->first();
            $statistiques = DB::select('SELECT sa.libelle AS saison,COUNT(s.match_id) AS nbre_match,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.joueur_id='.$request->joueur_id.' GROUP BY sa.id');
            $stats = DB::select('SELECT COUNT(s.match_id) AS nbre_match,SUM(s.tir) AS tir,SUM(s.tir_cadre) AS tir_cadre,SUM(s.passe_reussi) AS passe_r,SUM(s.hors_jeux) AS hors_jeux,SUM(s.centre) AS centre,SUM(s.Coup_franc_marque) AS coup_franc_marque,SUM(s.penelty_marque) AS panalty_marque,SUM(s.penalty_arrete) AS penalty_arrete,SUM(s.penalty_concede) AS penalty_concede,SUM(s.but_encaisse) AS but_encaisse,SUM(s.but_contre_camp) AS but_contre_camp,SUM(s.ballon_recupere) AS ballon_recup,SUM(s.ballon_intercepte) AS ballon_inter,SUM(s.centre) AS centre,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe_d,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_comise) AS faute_comise,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.saison_id='.$request->saison_id.' AND s.joueur_id='.$request->joueur_id);
            $nbre_entrant = FeuilleMatch::where([['joueur_id', $request->joueur_id], ['titularisation', "Entrant"]])->count('id');
            $nbre_remplacant = FeuilleMatch::where([['joueur_id', $request->joueur_id], ['titularisation', "Remplacant"]])->count('id');
            $palmares = PalmaresJoueur::with('saison','joueur','competition')->where('joueur_id', $request->joueur_id)->orderBy('created_at','desc')->paginate(10);
            $saisons = Saison::orderBy('libelle','desc')->get();
            return view('elite2.detail_joueur')
            ->with('detail_club_saison', $detail_club_saison)
            ->with('statistiques', $statistiques)
            ->with('stats', $stats)
            ->with('saisons', $saisons)
            ->with('palmares', $palmares)
            ->with('nbre_entrant', $nbre_entrant)
            ->with('nbre_remplacant', $nbre_remplacant);
        }
        else
        {
            $domiciliation = "";
            $domicile = $request->domiciliation;
            $domiciliation = "'".$domicile."'";
            $saisons = Saison::orderBy('libelle','desc')->get();
            $detail_club_saison = DetailClubSaison::with('joueur','club','poste')->where([['saison_id', $request->saison_id], ['joueur_id', $request->joueur_id]])->first();
            $statistiques = DB::select('SELECT sa.libelle AS saison,COUNT(s.match_id) AS nbre_match,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.joueur_id='.$request->joueur_id.' GROUP BY sa.id');
            $stats = DB::select('SELECT COUNT(s.match_id) AS nbre_match,SUM(s.tir) AS tir,SUM(s.tir_cadre) AS tir_cadre,SUM(s.passe_reussi) AS passe_r,SUM(s.hors_jeux) AS hors_jeux,SUM(s.centre) AS centre,SUM(s.Coup_franc_marque) AS coup_franc_marque,SUM(s.penelty_marque) AS panalty_marque,SUM(s.penalty_arrete) AS penalty_arrete,SUM(s.penalty_concede) AS penalty_concede,SUM(s.but_encaisse) AS but_encaisse,SUM(s.but_contre_camp) AS but_contre_camp,SUM(s.ballon_recupere) AS ballon_recup,SUM(s.ballon_intercepte) AS ballon_inter,SUM(s.centre) AS centre,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe_d,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_comise) AS faute_comise,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.saison_id='.$request->saison_id.' AND s.joueur_id='.$request->joueur_id.' AND s.domiciliation='.$domiciliation);
            $nbre_entrant = FeuilleMatch::where([['joueur_id', $request->joueur_id], ['titularisation', "Entrant"]])->count('id');
            $nbre_remplacant = FeuilleMatch::where([['joueur_id', $request->joueur_id], ['titularisation', "Remplacant"]])->count('id');
            $palmares = PalmaresJoueur::with('saison','joueur','competition')->where('joueur_id', $request->joueur_id)->orderBy('created_at','desc')->paginate(10);
            $saisons = Saison::orderBy('libelle','desc')->get();
            return view('elite2.detail_joueur')
            ->with('detail_club_saison', $detail_club_saison)
            ->with('statistiques', $statistiques)
            ->with('stats', $stats)
            ->with('saisons', $saisons)
            ->with('palmares', $palmares)
            ->with('nbre_entrant', $nbre_entrant)
            ->with('nbre_remplacant', $nbre_remplacant);
        }
    }
    
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function joueur_domiciliation_guinness(Request $request)
    {
        if($request->domiciliation == "Général")
        {
            $saisons = Saison::orderBy('libelle','desc')->get();
            $detail_club_saison = DetailClubSaison::with('joueur','club','poste')->where([['saison_id', $request->saison_id], ['joueur_id', $request->joueur_id]])->first();
            $statistiques = DB::select('SELECT sa.libelle AS saison,COUNT(s.match_id) AS nbre_match,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.joueur_id='.$request->joueur_id.' GROUP BY sa.id');
            $stats = DB::select('SELECT COUNT(s.match_id) AS nbre_match,SUM(s.tir) AS tir,SUM(s.tir_cadre) AS tir_cadre,SUM(s.passe_reussi) AS passe_r,SUM(s.hors_jeux) AS hors_jeux,SUM(s.centre) AS centre,SUM(s.Coup_franc_marque) AS coup_franc_marque,SUM(s.penelty_marque) AS panalty_marque,SUM(s.penalty_arrete) AS penalty_arrete,SUM(s.penalty_concede) AS penalty_concede,SUM(s.but_encaisse) AS but_encaisse,SUM(s.but_contre_camp) AS but_contre_camp,SUM(s.ballon_recupere) AS ballon_recup,SUM(s.ballon_intercepte) AS ballon_inter,SUM(s.centre) AS centre,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe_d,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_comise) AS faute_comise,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.saison_id='.$request->saison_id.' AND s.joueur_id='.$request->joueur_id);
            $nbre_entrant = FeuilleMatch::where([['joueur_id', $request->joueur_id], ['titularisation', "Entrant"]])->count('id');
            $nbre_remplacant = FeuilleMatch::where([['joueur_id', $request->joueur_id], ['titularisation', "Remplacant"]])->count('id');
            $palmares = PalmaresJoueur::with('saison','joueur','competition')->where('joueur_id', $request->joueur_id)->orderBy('created_at','desc')->paginate(10);
            $saisons = Saison::orderBy('libelle','desc')->get();
            return view('guinness.detail_joueur')
            ->with('detail_club_saison', $detail_club_saison)
            ->with('statistiques', $statistiques)
            ->with('stats', $stats)
            ->with('saisons', $saisons)
            ->with('palmares', $palmares)
            ->with('nbre_entrant', $nbre_entrant)
            ->with('nbre_remplacant', $nbre_remplacant);
        }
        else
        {
            $domiciliation = "";
            $domicile = $request->domiciliation;
            $domiciliation = "'".$domicile."'";
            $saisons = Saison::orderBy('libelle','desc')->get();
            $detail_club_saison = DetailClubSaison::with('joueur','club','poste')->where([['saison_id', $request->saison_id], ['joueur_id', $request->joueur_id]])->first();
            $statistiques = DB::select('SELECT sa.libelle AS saison,COUNT(s.match_id) AS nbre_match,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.joueur_id='.$request->joueur_id.' GROUP BY sa.id');
            $stats = DB::select('SELECT COUNT(s.match_id) AS nbre_match,SUM(s.tir) AS tir,SUM(s.tir_cadre) AS tir_cadre,SUM(s.passe_reussi) AS passe_r,SUM(s.hors_jeux) AS hors_jeux,SUM(s.centre) AS centre,SUM(s.Coup_franc_marque) AS coup_franc_marque,SUM(s.penelty_marque) AS panalty_marque,SUM(s.penalty_arrete) AS penalty_arrete,SUM(s.penalty_concede) AS penalty_concede,SUM(s.but_encaisse) AS but_encaisse,SUM(s.but_contre_camp) AS but_contre_camp,SUM(s.ballon_recupere) AS ballon_recup,SUM(s.ballon_intercepte) AS ballon_inter,SUM(s.centre) AS centre,SUM(s.minute_jouer) AS minute_jouer,SUM(s.but_marque) AS but,SUM(s.passe_decisive) AS passe_d,SUM(s.carton_jaune) AS jaune,SUM(s.carton_rouge) AS rouge,SUM(s.faute_comise) AS faute_comise,SUM(s.faute_subis) AS faute_subis FROM statistique_joueurs s,saisons sa WHERE s.saison_id=sa.id AND s.saison_id='.$request->saison_id.' AND s.joueur_id='.$request->joueur_id.' AND s.domiciliation='.$domiciliation);
            $nbre_entrant = FeuilleMatch::where([['joueur_id', $request->joueur_id], ['titularisation', "Entrant"]])->count('id');
            $nbre_remplacant = FeuilleMatch::where([['joueur_id', $request->joueur_id], ['titularisation', "Remplacant"]])->count('id');
            $palmares = PalmaresJoueur::with('saison','joueur','competition')->where('joueur_id', $request->joueur_id)->orderBy('created_at','desc')->paginate(10);
            $saisons = Saison::orderBy('libelle','desc')->get();
            return view('guinness.detail_joueur')
            ->with('detail_club_saison', $detail_club_saison)
            ->with('statistiques', $statistiques)
            ->with('stats', $stats)
            ->with('saisons', $saisons)
            ->with('palmares', $palmares)
            ->with('nbre_entrant', $nbre_entrant)
            ->with('nbre_remplacant', $nbre_remplacant);
        }
    }
}
