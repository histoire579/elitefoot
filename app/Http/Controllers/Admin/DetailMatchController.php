<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailMatch;
use App\Models\Matche;
use App\Models\Saison;
use App\Models\Classement;
use App\Models\Competition;
use App\Models\Club;
use Illuminate\Http\Request;

class DetailMatchController extends Controller
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
        // $matche=Matche::with('competition','saison','club1','club2','phase','journee','stade','arbitre1','arbitre2','arbitre3','arbitre4')->get();
        // return view('admin.page.match.index')->with('matchs',$matche);
        $detailMatch=DetailMatch::with('match','saison','club1','club2')->get();
        return view('admin.page.detailMatch.index')->with('details',$detailMatch);
    }

    public function getMatch(Request $request)
    {
        $matche=Matche::with('saison','club1','club2')->where('competition_id',$request->competition_id)->where('saison_id',$request->saison_id)->get();
        return response()->json($matche);
    }

    public function getClubByMatch(Request $request)
    {
        $matche=Matche::with('saison','club1','club2')->where('competition_id',$request->competition_id)->where('saison_id',$request->saison_id)->where('id',$request->match_id)->get();
        return response()->json($matche);
    }

    public function Add()
    {
        $saison=Saison::orderBy('created_at','desc')->get();
        $club=Club::orderBy('nom','asc')->get();
        $competition=Competition::all();
        return view('admin.page.detailMatch.add')->with('saisons',$saison)
                    ->with('competitions',$competition);
    }

    public function getDetail($id)
    {
        $detailMatch=DetailMatch::with('match','saison','club1','club2')->where('id',$id)->first();
        return view('admin.page.detailMatch.detail')->with('detail',$detailMatch);
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
        $detailMatch=new DetailMatch();
        $detailMatch->saison_id=$request->saison_id;
        $detailMatch->match_id=$request->match_id;

        $detailMatch->club1_id=$request->club1_id;
        $detailMatch->nbre_but_club1=$request->nbre_but_club1;

        $detailMatch->club2_id=$request->club2_id;
        $detailMatch->nbre_but_club2=$request->nbre_but_club2;

        $detailMatch->possession_club1=$request->possession_club1;
        $detailMatch->possession_club2=$request->possession_club2;

        $detailMatch->nbre_tir_club1=$request->nbre_tir_club1;
        $detailMatch->nbre_tir_club2=$request->nbre_tir_club2;

        $detailMatch->nbre_tir_cadre_club1=$request->nbre_tir_cadre_club1;
        $detailMatch->nbre_tir_cadre_club2=$request->nbre_tir_cadre_club2;

        $detailMatch->nbre_tir_arrete_club1=$request->nbre_tir_arrete_club1;
        $detailMatch->nbre_tir_arrete_club2=$request->nbre_tir_arrete_club2;

        $detailMatch->nbre_faute_club1=$request->nbre_faute_club1;
        $detailMatch->nbre_faute_club2=$request->nbre_faute_club2;

        $detailMatch->nbre_hors_jeu_club1=$request->nbre_hors_jeu_club1;
        $detailMatch->nbre_hors_jeu_club2=$request->nbre_hors_jeu_club2;

        $detailMatch->nbre_carton_jaune_club1=$request->nbre_carton_jaune_club1;
        $detailMatch->nbre_carton_jaune_club2=$request->nbre_carton_jaune_club2;

        $detailMatch->nbre_carton_rouge_club1=$request->nbre_carton_rouge_club1;
        $detailMatch->nbre_carton_rouge_club2=$request->nbre_carton_rouge_club2;

        $detailMatch->nbre_corner_club1=$request->nbre_corner_club1;
        $detailMatch->nbre_corner_club2=$request->nbre_corner_club2;

        $detailMatch->nbre_centre_club1=$request->nbre_centre_club1;
        $detailMatch->nbre_centre_club2=$request->nbre_centre_club2;

        $detailMatch->nbre_tacle_club1=$request->nbre_tacle_club1;
        $detailMatch->nbre_tacle_club2=$request->nbre_tacle_club2;

        $detailMatch->nbre_coup_franc_club1=$request->nbre_coup_franc_club1;
        $detailMatch->nbre_coup_franc_club2=$request->nbre_coup_franc_club2;

        $detailMatch->nbre_interception_club1=$request->nbre_interception_club1;
        $detailMatch->nbre_interception_club2=$request->nbre_interception_club2;

        $detailMatch->nbre_passe_reussie_club1=$request->nbre_passe_reussie_club1;
        $detailMatch->nbre_passe_reussie_club2=$request->nbre_passe_reussie_club2;
        
        $detailMatch->save();

        if ($detailMatch) {

            $match=Matche::find($request->match_id);
            $club1=Classement::where('saison_id',$request->saison_id)->where('club_id',$request->club1_id)->first();
            $club2=Classement::where('saison_id',$request->saison_id)->where('club_id',$request->club2_id)->first();

            $match->update([
                'nbre_but_club1' => $request->nbre_but_club1,
                'nbre_but_club2' => $request->nbre_but_club2,
                'type' => 'resultat'
            ]);

            if ($request->nbre_but_club1 > $request->nbre_but_club2) {
                
                $club1->update([
                    'point' => $club1->point + 3
                ]);
            } else if ($request->nbre_but_club1 < $request->nbre_but_club2) {
                $club2->update([
                    'point' => $club2->point + 3
                ]);
            }else{
                $club1->update([
                    'point' => $club1->point + 1
                ]);

                $club2->update([
                    'point' => $club2->point + 1
                ]);
            }
            

            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailMatch  $detailMatch
     * @return \Illuminate\Http\Response
     */
    public function show(DetailMatch $detailMatch)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailMatch  $detailMatch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saison=Saison::orderBy('created_at','desc')->get();
        $club=Club::orderBy('nom','asc')->get();
        $competition=Competition::all();
        $matche=Matche::orderBy('created_at','desc')->get();
        $detailMatch=DetailMatch::find($id);
        return view('admin.page.detailMatch.update')->with('saisons',$saison)->with('club',$club)
                    ->with('competitions',$competition)->with('detail',$detailMatch)->with('matchs',$matche);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailMatch  $detailMatch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detailMatch=DetailMatch::find($id);
        $detailMatch->saison_id=$request->saison_id;
        $detailMatch->match_id=$request->match_id;

        $detailMatch->club1_id=$request->club1_id;
        $detailMatch->nbre_but_club1=$request->nbre_but_club1;

        $detailMatch->club2_id=$request->club2_id;
        $detailMatch->nbre_but_club2=$request->nbre_but_club2;

        $detailMatch->possession_club1=$request->possession_club1;
        $detailMatch->possession_club2=$request->possession_club2;

        $detailMatch->nbre_tir_club1=$request->nbre_tir_club1;
        $detailMatch->nbre_tir_club2=$request->nbre_tir_club2;

        $detailMatch->nbre_tir_cadre_club1=$request->nbre_tir_cadre_club1;
        $detailMatch->nbre_tir_cadre_club2=$request->nbre_tir_cadre_club2;

        $detailMatch->nbre_tir_arrete_club1=$request->nbre_tir_arrete_club1;
        $detailMatch->nbre_tir_arrete_club2=$request->nbre_tir_arrete_club2;

        $detailMatch->nbre_faute_club1=$request->nbre_faute_club1;
        $detailMatch->nbre_faute_club2=$request->nbre_faute_club2;

        $detailMatch->nbre_hors_jeu_club1=$request->nbre_hors_jeu_club1;
        $detailMatch->nbre_hors_jeu_club2=$request->nbre_hors_jeu_club2;

        $detailMatch->nbre_carton_jaune_club1=$request->nbre_carton_jaune_club1;
        $detailMatch->nbre_carton_jaune_club2=$request->nbre_carton_jaune_club2;

        $detailMatch->nbre_carton_rouge_club1=$request->nbre_carton_rouge_club1;
        $detailMatch->nbre_carton_rouge_club2=$request->nbre_carton_rouge_club2;

        $detailMatch->nbre_corner_club1=$request->nbre_corner_club1;
        $detailMatch->nbre_corner_club2=$request->nbre_corner_club2;

        $detailMatch->nbre_centre_club1=$request->nbre_centre_club1;
        $detailMatch->nbre_centre_club2=$request->nbre_centre_club2;

        $detailMatch->nbre_tacle_club1=$request->nbre_tacle_club1;
        $detailMatch->nbre_tacle_club2=$request->nbre_tacle_club2;

        $detailMatch->nbre_coup_franc_club1=$request->nbre_coup_franc_club1;
        $detailMatch->nbre_coup_franc_club2=$request->nbre_coup_franc_club2;

        $detailMatch->nbre_interception_club1=$request->nbre_interception_club1;
        $detailMatch->nbre_interception_club2=$request->nbre_interception_club2;

        $detailMatch->nbre_passe_reussie_club1=$request->nbre_passe_reussie_club1;
        $detailMatch->nbre_passe_reussie_club2=$request->nbre_passe_reussie_club2;
        
        $detailMatch->save();

        if ($detailMatch) {
            return redirect()->route('administration.detail-match')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailMatch  $detailMatch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detailMatch=DetailMatch::find($id);
        
        $detailMatch->delete();
        if ($detailMatch){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
