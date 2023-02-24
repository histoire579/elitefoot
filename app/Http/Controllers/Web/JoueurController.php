<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\DetailClubSaison;
use App\Models\Saison;
use App\Models\Competition;
use App\Models\DetailCompetitionSaison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_joueur_one()
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $saison_id = $saisons->max('id');
        $competition = Competition::where('libelle', "Elite 1")->first();
        $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $saison_id]])->get();
        $joueurs =  DB::select('SELECT s.id AS saison_id,j.id AS joueur_id,j.photo,j.drapeau,j.nom,j.nationalite,j.pied_fort,p.libelle AS poste,d.dorssad,c.logo,c.nom AS club FROM detail_club_saisons d,joueurs j,postes p,saisons s,clubs c WHERE d.club_id=c.id AND d.joueur_id=j.id AND d.poste_id=p.id AND d.saison_id=s.id AND d.club_id IN (SELECT club_id FROM detail_competition_saisons WHERE competition_id='.$competition->id.' AND saison_id='.$saison_id.')');
        return view('elite1.joueur')
        ->with('joueurs', $joueurs)
        ->with('saisons', $saisons)
        ->with('detail_competition_saisons', $detail_competition_saisons);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_joueur_two()
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $saison_id = $saisons->max('id');
        $competition = Competition::where('libelle', "Elite 2")->first();
        $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $saison_id]])->get();
        $joueurs =  DB::select('SELECT s.id AS saison_id,j.id AS joueur_id,j.photo,j.drapeau,j.nom,j.nationalite,j.pied_fort,p.libelle AS poste,d.dorssad,c.logo,c.nom AS club FROM detail_club_saisons d,joueurs j,postes p,saisons s,clubs c WHERE d.club_id=c.id AND d.joueur_id=j.id AND d.poste_id=p.id AND d.saison_id=s.id AND d.club_id IN (SELECT club_id FROM detail_competition_saisons WHERE competition_id='.$competition->id.' AND saison_id='.$saison_id.')');
        return view('elite2.joueur')
        ->with('joueurs', $joueurs)
        ->with('saisons', $saisons)
        ->with('detail_competition_saisons', $detail_competition_saisons);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_joueur_guinness()
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $saison_id = $saisons->max('id');
        $competition = Competition::where('libelle', "Guinness super league")->first();
        $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $saison_id]])->get();
        $joueurs =  DB::select('SELECT s.id AS saison_id,j.id AS joueur_id,j.photo,j.drapeau,j.nom,j.nationalite,j.pied_fort,p.libelle AS poste,d.dorssad,c.logo,c.nom AS club FROM detail_club_saisons d,joueurs j,postes p,saisons s,clubs c WHERE d.club_id=c.id AND d.joueur_id=j.id AND d.poste_id=p.id AND d.saison_id=s.id AND d.club_id IN (SELECT club_id FROM detail_competition_saisons WHERE competition_id='.$competition->id.' AND saison_id='.$saison_id.')');
        return view('guinness.joueur')
        ->with('joueurs', $joueurs)
        ->with('saisons', $saisons)
        ->with('detail_competition_saisons', $detail_competition_saisons);
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
     * @param  \App\Models\DetailClubSaison  $detailClubSaison
     * @return \Illuminate\Http\Response
     */
    public function show(DetailClubSaison $detailClubSaison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailClubSaison  $detailClubSaison
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailClubSaison $detailClubSaison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailClubSaison  $detailClubSaison
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailClubSaison $detailClubSaison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailClubSaison  $detailClubSaison
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailClubSaison $detailClubSaison)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function joueur_by_club_one(Request $request)
    {
        if($request->club_id == null)
        {
            $saisons = Saison::orderBy('libelle','desc')->get();
            $saison_id = $saisons->max('id');
            $competition = Competition::where('libelle', "Elite 1")->first();
            $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $saison_id]])->get();
            $joueurs =  DB::select('SELECT s.id AS saison_id,j.id AS joueur_id,j.photo,j.drapeau,j.nom,j.nationalite,j.pied_fort,p.libelle AS poste,d.dorssad,c.logo,c.nom AS club FROM detail_club_saisons d,joueurs j,postes p,saisons s,clubs c WHERE d.club_id=c.id AND d.joueur_id=j.id AND d.poste_id=p.id AND d.saison_id=s.id AND d.club_id IN (SELECT club_id FROM detail_competition_saisons WHERE competition_id='.$competition->id.' AND saison_id='.$request->saison_id.')');
            return view('elite1.joueur')
            ->with('joueurs', $joueurs)
            ->with('saisons', $saisons)
            ->with('detail_competition_saisons', $detail_competition_saisons);
        }
        else
        {
            $saisons = Saison::orderBy('libelle','desc')->get();
            $competition = Competition::where('libelle', "Elite 1")->first();
            $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $request->saison_id]])->get();
            $joueurs =  DB::select('SELECT c.id,s.id AS saison_id,j.id AS joueur_id,j.photo,j.drapeau,j.nom,j.nationalite,j.pied_fort,p.libelle AS poste,d.dorssad,c.logo,c.nom AS club FROM detail_club_saisons d,joueurs j,postes p,saisons s,clubs c WHERE d.club_id=c.id AND d.joueur_id=j.id AND d.poste_id=p.id AND d.saison_id=s.id AND d.club_id IN (SELECT club_id FROM detail_competition_saisons WHERE competition_id='.$competition->id.' AND saison_id='.$request->saison_id.' AND club_id='.$request->club_id.')');
            return view('elite1.joueur')
            ->with('joueurs', $joueurs)
            ->with('saisons', $saisons)
            ->with('detail_competition_saisons', $detail_competition_saisons);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function joueur_by_club_two(Request $request)
    {
        if($request->club_id == null)
        {
            $saisons = Saison::orderBy('libelle','desc')->get();
            $competition = Competition::where('libelle', "Elite 2")->first();
            $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $request->saison_id]])->get();
            $joueurs =  DB::select('SELECT s.id AS saison_id,j.id AS joueur_id,j.photo,j.drapeau,j.nom,j.nationalite,j.pied_fort,p.libelle AS poste,d.dorssad,c.logo,c.nom AS club FROM detail_club_saisons d,joueurs j,postes p,saisons s,clubs c WHERE d.club_id=c.id AND d.joueur_id=j.id AND d.poste_id=p.id AND d.saison_id=s.id AND d.club_id IN (SELECT club_id FROM detail_competition_saisons WHERE competition_id='.$competition->id.' AND saison_id='.$request->saison_id.')');
            return view('elite2.joueur')
            ->with('joueurs', $joueurs)
            ->with('saisons', $saisons)
            ->with('detail_competition_saisons', $detail_competition_saisons);
        }
        else
        {
            $saisons = Saison::orderBy('libelle','desc')->get();
            $competition = Competition::where('libelle', "Elite 2")->first();
            $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $request->saison_id]])->get();
            $joueurs =  DB::select('SELECT c.id,s.id AS saison_id,j.id AS joueur_id,j.photo,j.drapeau,j.nom,j.nationalite,j.pied_fort,p.libelle AS poste,d.dorssad,c.logo,c.nom AS club FROM detail_club_saisons d,joueurs j,postes p,saisons s,clubs c WHERE d.club_id=c.id AND d.joueur_id=j.id AND d.poste_id=p.id AND d.saison_id=s.id AND d.club_id IN (SELECT club_id FROM detail_competition_saisons WHERE competition_id='.$competition->id.' AND saison_id='.$request->saison_id.' AND club_id='.$request->club_id.')');
            return view('elite2.joueur')
            ->with('joueurs', $joueurs)
            ->with('saisons', $saisons)
            ->with('detail_competition_saisons', $detail_competition_saisons);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function joueur_by_club_guinness(Request $request)
    {
        if($request->club_id == null)
        {
            $saisons = Saison::orderBy('libelle','desc')->get();
            $competition = Competition::where('libelle', "Guinness super league")->first();
            $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $request->saison_id]])->get();
            $joueurs =  DB::select('SELECT s.id AS saison_id,j.id AS joueur_id,j.photo,j.drapeau,j.nom,j.nationalite,j.pied_fort,p.libelle AS poste,d.dorssad,c.logo,c.nom AS club FROM detail_club_saisons d,joueurs j,postes p,saisons s,clubs c WHERE d.club_id=c.id AND d.joueur_id=j.id AND d.poste_id=p.id AND d.saison_id=s.id AND d.club_id IN (SELECT club_id FROM detail_competition_saisons WHERE competition_id='.$competition->id.' AND saison_id='.$request->saison_id.')');
            return view('guinness.joueur')
            ->with('joueurs', $joueurs)
            ->with('saisons', $saisons)
            ->with('detail_competition_saisons', $detail_competition_saisons);
        }
        else
        {
            $saisons = Saison::orderBy('libelle','desc')->get();
            $competition = Competition::where('libelle', "Guinness super league")->first();
            $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $request->saison_id]])->get();
            $joueurs =  DB::select('SELECT c.id,s.id AS saison_id,j.id AS joueur_id,j.photo,j.drapeau,j.nom,j.nationalite,j.pied_fort,p.libelle AS poste,d.dorssad,c.logo,c.nom AS club FROM detail_club_saisons d,joueurs j,postes p,saisons s,clubs c WHERE d.club_id=c.id AND d.joueur_id=j.id AND d.poste_id=p.id AND d.saison_id=s.id AND d.club_id IN (SELECT club_id FROM detail_competition_saisons WHERE competition_id='.$competition->id.' AND saison_id='.$request->saison_id.' AND club_id='.$request->club_id.')');
            return view('guinness.joueur')
            ->with('joueurs', $joueurs)
            ->with('saisons', $saisons)
            ->with('detail_competition_saisons', $detail_competition_saisons);
        }
    }
}
