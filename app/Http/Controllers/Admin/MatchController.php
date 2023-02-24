<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Matche;
use App\Models\Saison;
use App\Models\Club;
use App\Models\Competition;
use App\Models\Phase;
use App\Models\Arbitre;
use App\Models\Journee;
use App\Models\Stade;
use App\Models\DetailCompetitionSaison;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MatchController extends Controller
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
        $matche=Matche::with('competition','saison','club1','club2','phase','journee','stade','arbitre1','arbitre2','arbitre3','arbitre4')->get();
        return view('admin.page.match.index')->with('matchs',$matche);
    }

    public function getClub(Request $request)
    {
        $club=DetailCompetitionSaison::with('club')->where('competition_id',$request->competition_id)->where('saison_id',$request->saison_id)->get();
        return response()->json($club);
    }

    public function getJournee(Request $request)
    {
        $journee=Journee::where('saison_id',$request->saison_id)->get();
        return response()->json($journee);
    }

    public function getPhase(Request $request)
    {
        $phase=Phase::where('saison_id',$request->saison_id)->get();
        return response()->json($phase);
    }

    public function Add()
    {
        $saison=Saison::orderBy('created_at','desc')->get();
        $club=Club::orderBy('nom','asc')->get();
        $phase=Phase::all();
        $journee=Journee::all();
        $stade=Stade::orderBy('nom','asc')->get();
        $arbitre=Arbitre::orderBy('nom','asc')->get();
        $competition=Competition::all();
        return view('admin.page.match.add')->with('saisons',$saison)->with('phases',$phase)
                    ->with('competitions',$competition)->with('club',$club)->with('journees',$journee)
                    ->with('stades',$stade)->with('arbitres',$arbitre);
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
        $nom1=Club::find($request->club1_id);
        $nom2=Club::find($request->club2_id);
        $slug=Str::slug($nom1->nom. 'Vs' .$nom2->nom);
        $matche=new Matche();
        $matche->competition_id=$request->competition_id;
        $matche->saison_id=$request->saison_id;
        $matche->journee_id=$request->journee_id;
        $matche->phase_id=$request->phase_id;
        $matche->stade_id=$request->stade_id;
        $matche->club1_id=$request->club1_id;
        $matche->nbre_but_club1=$request->nbre_but_club1;
        $matche->club_domicile=$request->club1_id;

        $matche->club2_id=$request->club2_id;
        $matche->nbre_but_club2=$request->nbre_but_club2;
        $matche->club_exterieur=$request->club2_id;

        $matche->arbitre1_id=$request->arbitre1_id;
        $matche->arbitre2_id=$request->arbitre2_id;
        $matche->arbitre3_id=$request->arbitre3_id;
        $matche->arbitre4_id=$request->arbitre4_id;
        $matche->date=$request->date;
        $matche->heure=$request->heure;
        $matche->type='Calendrier';
        $matche->slug=$slug;
        
        
        $matche->save();

        if ($matche) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matche  $matche
     * @return \Illuminate\Http\Response
     */
    public function show(Matche $matche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matche  $matche
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saison=Saison::orderBy('created_at','desc')->get();
        $club=Club::orderBy('nom','asc')->get();
        $phase=Phase::all();
        $journee=Journee::all();
        $stade=Stade::orderBy('nom','asc')->get();
        $arbitre=Arbitre::orderBy('nom','asc')->get();
        $competition=Competition::all();
        $matche=Matche::find($id);
        return view('admin.page.match.update')->with('match',$matche)->with('saisons',$saison)->with('phases',$phase)
                ->with('competitions',$competition)->with('club',$club)->with('journees',$journee)
                ->with('stades',$stade)->with('arbitres',$arbitre);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matche  $matche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nom1=Club::find($request->club1_id);
        $nom2=Club::find($request->club2_id);
        $slug=Str::slug($nom1->nom. 'V' .$nom2->nom);
        $matche=Matche::find($id);
        $matche->competition_id=$request->competition_id;
        $matche->saison_id=$request->saison_id;
        $matche->journee_id=$request->journee_id;
        $matche->phase_id=$request->phase_id;
        $matche->stade_id=$request->stade_id;
        $matche->club1_id=$request->club1_id;
        $matche->nbre_but_club1=$request->nbre_but_club1;
        $matche->club_domicile=$request->club1_id;

        $matche->club2_id=$request->club2_id;
        $matche->nbre_but_club2=$request->nbre_but_club2;
        $matche->club_exterieur=$request->club2_id;

        $matche->arbitre1_id=$request->arbitre1_id;
        $matche->arbitre2_id=$request->arbitre2_id;
        $matche->arbitre3_id=$request->arbitre3_id;
        $matche->arbitre4_id=$request->arbitre4_id;
        $matche->date=$request->date;
        $matche->heure=$request->heure;
        $matche->type=$matche->type;
        $matche->slug=$slug;
        
        
        $matche->save();

        if ($matche) {
            return redirect()->route('administration.match')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matche  $matche
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matche=Matche::find($id);
        
        $matche->delete();
        if ($matche){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
