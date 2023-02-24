<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Stade;
use App\Models\Saison;
use App\Models\Journee;
use App\Models\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_club_one()
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $journees = Journee::orderBy('libelle','desc')->get();
        $saison_id = $saisons->max('id');
        $competition = Competition::where('libelle', "Elite 1")->first();
        $clubs = DB::select('SELECT c.id,c.logo,c.nom AS club,c.twitter,c.facebook,c.site,st.nom AS stade FROM detail_competition_saisons d,saisons s,clubs c,competitions co,stades st WHERE d.saison_id=s.id AND d.competition_id=co.id AND d.club_id=c.id AND c.stade_id=st.id AND co.id='.$competition->id.' AND s.id='.$saison_id);
        return view('elite1.club')
        ->with('saisons', $saisons)
        ->with('journees', $journees)
        ->with('clubs', $clubs);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_club_two()
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $journees = Journee::orderBy('libelle','desc')->get();
        $saison_id = $saisons->max('id');
        $competition = Competition::where('libelle', "Elite 2")->first();
        $clubs = DB::select('SELECT c.id,c.logo,c.nom AS club,c.twitter,c.facebook,c.site,st.nom AS stade FROM detail_competition_saisons d,saisons s,clubs c,competitions co,stades st WHERE d.saison_id=s.id AND d.competition_id=co.id AND d.club_id=c.id AND c.stade_id=st.id AND co.id='.$competition->id.' AND s.id='.$saison_id);
        return view('elite1.club')
        ->with('saisons', $saisons)
        ->with('journees', $journees)
        ->with('clubs', $clubs);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_club_guinness()
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $journees = Journee::orderBy('libelle','desc')->get();
        $saison_id = $saisons->max('id');
        $competition = Competition::where('libelle', "Guinness super league")->first();
        $clubs = DB::select('SELECT c.id,c.logo,c.nom AS club,c.twitter,c.facebook,c.site,st.nom AS stade FROM detail_competition_saisons d,saisons s,clubs c,competitions co,stades st WHERE d.saison_id=s.id AND d.competition_id=co.id AND d.club_id=c.id AND c.stade_id=st.id AND co.id='.$competition->id.' AND s.id='.$saison_id);
        return view('elite1.club')
        ->with('saisons', $saisons)
        ->with('journees', $journees)
        ->with('clubs', $clubs);
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
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function club_by_journee_one(Request $request)
    {
        if($request->journee_id == "Selectionner une journée")
        {
            $saisons = Saison::orderBy('libelle','desc')->get();
            $journees = Journee::orderBy('libelle','desc')->get();
            $competition = Competition::where('libelle', "Elite 1")->first();
            $clubs = DB::select('SELECT c.id,c.logo,c.nom AS club,c.twitter,c.facebook,c.site,st.nom AS stade FROM detail_competition_saisons d,saisons s,clubs c,competitions co,stades st WHERE d.saison_id=s.id AND d.competition_id=co.id AND d.club_id=c.id AND c.stade_id=st.id AND co.id='.$competition->id.' AND s.id='.$request->saison_id);
            return view('elite1.club')
            ->with('saisons', $saisons)
            ->with('journees', $journees)
            ->with('clubs', $clubs);
        }
        else
        {
            $saisons = Saison::orderBy('libelle','desc')->get();
            $journees = Journee::orderBy('libelle','desc')->get();
            $competition = Competition::where('libelle', "Elite 1")->first();
            $clubs = DB::select('SELECT c.id,c.logo,c.nom AS club,c.twitter,c.facebook,c.site,st.nom AS stade FROM detail_competition_saisons d,saisons s,clubs c,competitions co,stades st,journees j WHERE d.saison_id=s.id AND d.competition_id=co.id AND d.club_id=c.id AND c.stade_id=st.id AND d.journee_id=j.id AND co.id='.$competition->id.' AND s.id='.$request->saison_id.' AND j.id='.$request->journee_id);
            return view('elite1.club')
            ->with('saisons', $saisons)
            ->with('journees', $journees)
            ->with('clubs', $clubs);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function club_by_journee_two(Request $request)
    {
        if($request->journee_id == "Selectionner une journée")
        {
            $saisons = Saison::orderBy('libelle','desc')->get();
            $journees = Journee::orderBy('libelle','desc')->get();
            $competition = Competition::where('libelle', "Elite 2")->first();
            $clubs = DB::select('SELECT c.id,c.logo,c.nom AS club,c.twitter,c.facebook,c.site,st.nom AS stade FROM detail_competition_saisons d,saisons s,clubs c,competitions co,stades st WHERE d.saison_id=s.id AND d.competition_id=co.id AND d.club_id=c.id AND c.stade_id=st.id AND co.id='.$competition->id.' AND s.id='.$request->saison_id);
            return view('elite1.club')
            ->with('saisons', $saisons)
            ->with('journees', $journees)
            ->with('clubs', $clubs);
        }
        else{
            $saisons = Saison::orderBy('libelle','desc')->get();
            $journees = Journee::orderBy('libelle','desc')->get();
            $competition = Competition::where('libelle', "Elite 2")->first();
            $clubs = DB::select('SELECT c.id,c.logo,c.nom AS club,c.twitter,c.facebook,c.site,st.nom AS stade FROM detail_competition_saisons d,saisons s,clubs c,competitions co,stades st,journees j WHERE d.saison_id=s.id AND d.competition_id=co.id AND d.club_id=c.id AND c.stade_id=st.id AND d.journee_id=j.id AND co.id='.$competition->id.' AND s.id='.$request->saison_id.' AND j.id='.$request->journee_id);
            return view('elite1.club')
            ->with('saisons', $saisons)
            ->with('journees', $journees)
            ->with('clubs', $clubs);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function club_by_journee_guinness(Request $request)
    {
        if($request->journee_id == "Selectionner une journée")
        {
            $saisons = Saison::orderBy('libelle','desc')->get();
            $journees = Journee::orderBy('libelle','desc')->get();
            $competition = Competition::where('libelle', "Guinness super league")->first();
            $clubs = DB::select('SELECT c.id,c.logo,c.nom AS club,c.twitter,c.facebook,c.site,st.nom AS stade FROM detail_competition_saisons d,saisons s,clubs c,competitions co,stades st WHERE d.saison_id=s.id AND d.competition_id=co.id AND d.club_id=c.id AND c.stade_id=st.id AND co.id='.$competition->id.' AND s.id='.$request->saison_id);
            return view('elite1.club')
            ->with('saisons', $saisons)
            ->with('journees', $journees)
            ->with('clubs', $clubs);
        }
        else
        {
            $saisons = Saison::orderBy('libelle','desc')->get();
            $journees = Journee::orderBy('libelle','desc')->get();
            $competition = Competition::where('libelle', "Guinness super league")->first();
            $clubs = DB::select('SELECT c.id,c.logo,c.nom AS club,c.twitter,c.facebook,c.site,st.nom AS stade FROM detail_competition_saisons d,saisons s,clubs c,competitions co,stades st,journees j WHERE d.saison_id=s.id AND d.competition_id=co.id AND d.club_id=c.id AND c.stade_id=st.id AND d.journee_id=j.id AND co.id='.$competition->id.' AND s.id='.$request->saison_id.' AND j.id='.$request->journee_id);
            return view('elite1.club')
            ->with('saisons', $saisons)
            ->with('journees', $journees)
            ->with('clubs', $clubs);
        }
    }
}
