<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailCompetitionSaison;
use App\Models\Saison;
use App\Models\Club;
use App\Models\Competition;
use App\Models\Phase;
use Illuminate\Http\Request;

class DetailSompetionSaisonController extends Controller
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
        $detailCompetitionSaison=DetailCompetitionSaison::with('competition','saison','club','phase')->get();
        return view('admin.page.detailcompetitionsaison.index')->with('detailCompetitionSaisons',$detailCompetitionSaison);
    }

    public function Add()
    {
        $saison=Saison::orderBy('created_at','desc')->get();
        $club=Club::orderBy('nom','asc')->get();
        $phase=Phase::all();
        $competition=Competition::all();
        return view('admin.page.detailcompetitionsaison.add')->with('saisons',$saison)->with('phases',$phase)
                    ->with('competitions',$competition)->with('club',$club);
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
        $detailCompetitionSaison=new DetailCompetitionSaison();
        $detailCompetitionSaison->competition_id=$request->competition_id;
        $detailCompetitionSaison->saison_id=$request->saison_id;
        $detailCompetitionSaison->club_id=$request->club_id;
        $detailCompetitionSaison->phase_id=$request->phase_id;
        
        $detailCompetitionSaison->save();

        if ($detailCompetitionSaison) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailCompetitionSaison  $detailCompetitionSaison
     * @return \Illuminate\Http\Response
     */
    public function show(DetailCompetitionSaison $detailCompetitionSaison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailCompetitionSaison  $detailCompetitionSaison
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detailCompetitionSaison=DetailCompetitionSaison::find($id);
        $saison=Saison::orderBy('created_at','desc')->get();
        $club=Club::orderBy('nom','asc')->get();
        $phase=Phase::all();
        $competition=Competition::all();
        return view('admin.page.detailcompetitionsaison.update')->with('detailSompetionSaison',$detailCompetitionSaison)->with('saisons',$saison)->with('phases',$phase)
                ->with('competitions',$competition)->with('club',$club);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailCompetitionSaison  $detailCompetitionSaison
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detailCompetitionSaison=DetailCompetitionSaison::find($id);
        $detailCompetitionSaison->competition_id=$request->competition_id;
        $detailCompetitionSaison->saison_id=$request->saison_id;
        $detailCompetitionSaison->club_id=$request->club_id;
        $detailCompetitionSaison->phase_id=$request->phase_id;
        
        $detailCompetitionSaison->save();

        if ($detailCompetitionSaison) {
            return redirect()->route('administration.detail-competion-saison')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailCompetitionSaison  $detailCompetitionSaison
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detailCompetitionSaison=DetailCompetitionSaison::find($id);
       
        $detailCompetitionSaison->delete();
        if ($detailCompetitionSaison){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
