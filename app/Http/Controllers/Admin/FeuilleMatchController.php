<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeuilleMatch;
use App\Models\Matche;
use App\Models\Saison;
use App\Models\Club;
use App\Models\Joueur;
use App\Models\Competition;
use App\Models\DetailClubSaison;
use Illuminate\Http\Request;

class FeuilleMatchController extends Controller
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
        $feuilleMatch=FeuilleMatch::with('match','club1','club2','saison','joueur_equipe1','joueur_equipe1')->get();
        //dd( $feuilleMatch);
        return view('admin.page.feuillematch.index')->with('feuilles',$feuilleMatch);
    }

    public function Add()
    {
        $saison=Saison::orderBy('created_at','desc')->get();
        $match=Matche::orderBy('created_at','desc')->get();
        $club=Club::orderBy('nom','asc')->get();
        $joueur=Joueur::orderBy('nom','asc')->get();
        $competition=Competition::all();
        return view('admin.page.feuillematch.add')->with('saisons',$saison)->with('matchs',$match)
                    ->with('competitions',$competition)->with('club',$club)->with('joueurs',$joueur);
    }

    public function AddFeuille()
    {
        return view('admin.page.feuillematch.addFeuille');
    }

    public function getEffectif(Request $request)
    {
        $joueur=DetailClubSaison::with('joueur','poste')->where('club_id',$request->club_id)->get();
        return response()->json($joueur);
    }

    public function getCompetition()
    {
        return Competition::all();
        
    }

    public function getSaison()
    {
        return Saison::all();
        
    }

    public function getFeuille($match_id,$club1_id,$club2_id)
    {
        $feuilleMatch=FeuilleMatch::with('match','club1','club2','saison','joueur_equipe1','joueur_equipe1')
                                    ->where('match_id',$match_id)->where('club1_id',$club1_id)
                                    ->where('club2_id',$club2_id)->get();

        $match=FeuilleMatch::with('match','club1','club2','saison','joueur_equipe1','joueur_equipe1')
                                    ->where('match_id',$match_id)->where('club1_id',$club1_id)
                                    ->where('club2_id',$club2_id)->first();                            
        
        return view('admin.page.match.feuille')->with('feuilles',$feuilleMatch)->with('match',$match);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //dd($request->all());
        $feuilleMatch=new FeuilleMatch();
        $feuilleMatch->competition_id=$request->competition_id;
        $feuilleMatch->saisan_id=$request->saisan_id;
        $feuilleMatch->match_id=$request->match_id;
        $feuilleMatch->club1_id=$request->club1_id;
        $feuilleMatch->club2_id=$request->club2_id;
        $feuilleMatch->equipe1=$request->equipe1;
        $feuilleMatch->titularisation_equipe1=$request->titulaire_equipe1;
        $feuilleMatch->equipe2=$request->equipe2;
        $feuilleMatch->titularisation_equipe2=$request->titulaire_equipe2;
        
        $feuilleMatch->save();

        if ($feuilleMatch) {
            return response()->json($request->all());
        }else{
            return response()->json('error');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipe1='';
        $equipe2='';
        if ($request->equipe_club1 !=null) {
            foreach ($request->equipe_club1 as  $value) {
                $equipe1 .= $value .',';
            } 
        }
        

        
        if ($request->equipe_club2 !=null) {
            foreach ($request->equipe_club2 as  $value) {
                $equipe2 .= $value .',';
            }
        }

        $feuilleMatch=new FeuilleMatch();
        $feuilleMatch->match_id=$request->match_id;
        $feuilleMatch->club1_id=$request->club1_id;
        $feuilleMatch->club2_id=$request->club2_id;
        $feuilleMatch->equipe_club1=$equipe1;
        $feuilleMatch->equipe_club2=$equipe2;
        
        $feuilleMatch->save();

        if ($feuilleMatch) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeuilleMatch  $feuilleMatch
     * @return \Illuminate\Http\Response
     */
    public function show(FeuilleMatch $feuilleMatch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeuilleMatch  $feuilleMatch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feuilleMatch=FeuilleMatch::find($id);
        $saison=Saison::orderBy('created_at','desc')->get();
        $match=Matche::orderBy('created_at','desc')->get();
        $club=Club::orderBy('nom','asc')->get();
        $joueur=Joueur::orderBy('nom','asc')->get();
        $competition=Competition::all();
        return view('admin.page.feuillematch.update')->with('feuille',$feuilleMatch)->with('saisons',$saison)->with('matchs',$match)
        ->with('competitions',$competition)->with('club',$club)->with('joueurs',$joueur);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeuilleMatch  $feuilleMatch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       

        $feuilleMatch=FeuilleMatch::find($id);
        $feuilleMatch->competition_id=$request->competition_id;
        $feuilleMatch->saisan_id=$request->saison_id;
        $feuilleMatch->match_id=$request->match_id;
        $feuilleMatch->club1_id=$request->club1_id;
        $feuilleMatch->club2_id=$request->club2_id;
        $feuilleMatch->equipe1=$request->equipe1;
        $feuilleMatch->titularisation_equipe1=$request->titulaire_equipe1;
        $feuilleMatch->equipe2=$request->equipe2;
        $feuilleMatch->titularisation_equipe2=$request->titulaire_equipe2;
        
        $feuilleMatch->save();

        if ($feuilleMatch) {
            return redirect()->route('administration.feuille')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeuilleMatch  $feuilleMatch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feuilleMatch=FeuilleMatch::find($id);
       
        $feuilleMatch->delete();
        if ($feuilleMatch){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
