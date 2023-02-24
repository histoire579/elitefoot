<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;
use App\Models\Saison;
use App\Models\FeuilleMatch;
use App\Models\Matche;
use App\Models\DetailClubSaison;
use App\Models\DetailCompetitionSaison;


class AcceuilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu');
    }

    public function getCompetition()
    {
        return Competition::all();
        
    }

    public function getSaison()
    {
        return Saison::all();
        
    }

    public function getMatch()
    {
        return Matche::where('competition_id',request('competition_id'))->where('saison_id',request('saison_id'))->get();
        
    }

    public function getClub()
    {
        return DetailCompetitionSaison::with('club')->where('competition_id',request('competition_id'))->where('saison_id',request('saison_id'))->get();
        
    }

    public function getJoueur()
    {
        return DetailClubSaison::with('joueur','poste')->where('club_id',request('club_id'))->get();
        
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
        //return response()->json($request->all());
        $feuilleMatch=new FeuilleMatch();
        $feuilleMatch->competition_id=$request->competition_id;
        $feuilleMatch->saisan_id=$request->saison_id;
        $feuilleMatch->match_id=$request->match_id;
        $feuilleMatch->club1_id=$request->club1_id;
        if ($request->club2_id == null) {
            $feuilleMatch->club2_id=0;
        } else {
            $feuilleMatch->club2_id=$request->club2_id;
        }
        
        
        $feuilleMatch->equipe1=$request->equipe1;
        $feuilleMatch->titularisation_equipe1=$request->titulaire_equipe1;
        $feuilleMatch->equipe2=$request->equipe2;
        $feuilleMatch->titularisation_equipe2=$request->titulaire_equipe2;
        
        $feuilleMatch->save();

        if ($feuilleMatch) {
            return response()->json('succes');
        }else{
            return response()->json('error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
