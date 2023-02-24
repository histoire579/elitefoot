<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailClubSaison;
use App\Models\Saison;
use App\Models\Club;
use App\Models\Joueur;
use App\Models\Poste;
use Illuminate\Http\Request;

class EffectifController extends Controller
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
        $detailClubSaison=DetailClubSaison::with('joueur','saison','club','poste')->get();
        return view('admin.page.effectif.index')->with('effectifs',$detailClubSaison);
    }

    public function Add()
    {
        $saison=Saison::orderBy('created_at','desc')->get();
        $club=Club::orderBy('nom','asc')->get();
        $poste=Poste::orderBy('libelle','asc')->get();
        $joueur=Joueur::orderBy('nom','asc')->get();
        return view('admin.page.effectif.add')->with('saisons',$saison)->with('postes',$poste)
                    ->with('joueurs',$joueur)->with('club',$club);
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
        $detailClubSaison=new DetailClubSaison();
        $detailClubSaison->joueur_id=$request->joueur_id;
        $detailClubSaison->saison_id=$request->saison_id;
        $detailClubSaison->club_id=$request->club_id;
        $detailClubSaison->poste_id=$request->poste_id;
        $detailClubSaison->dorssad=$request->dorssad;
        
        $detailClubSaison->save();

        if ($detailClubSaison) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
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
    public function edit($id)
    {
        $detailClubSaison=DetailClubSaison::find($id);
        $saison=Saison::orderBy('created_at','desc')->get();
        $club=Club::orderBy('nom','asc')->get();
        $poste=Poste::orderBy('libelle','asc')->get();
        $joueur=Joueur::orderBy('nom','asc')->get();
        return view('admin.page.detailcompetitionsaison.update')->with('effectif',$detailClubSaison)->with('saisons',$saison)->with('postes',$poste)
                ->with('joueurs',$joueur)->with('club',$club);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailClubSaison  $detailClubSaison
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detailClubSaison=DetailClubSaison::find($id);
        $detailClubSaison->joueur_id=$request->joueur_id;
        $detailClubSaison->saison_id=$request->saison_id;
        $detailClubSaison->club_id=$request->club_id;
        $detailClubSaison->poste_id=$request->poste_id;
        $detailClubSaison->dorssad=$request->dorssad;
        
        $detailClubSaison->save();

        if ($detailClubSaison) {
            return redirect()->route('administration.effectif')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailClubSaison  $detailClubSaison
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detailClubSaison=DetailClubSaison::find($id);
       
        $detailClubSaison->delete();
        if ($detailClubSaison){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
