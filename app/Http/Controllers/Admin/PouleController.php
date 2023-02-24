<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Phase;
use App\Models\Saison;
use Illuminate\Http\Request;

class PouleController extends Controller
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
        $phase=Phase::all();
        return view('admin.page.poule.index')->with('poules',$phase);
    }

    public function Add()
    {
        $saison=Saison::orderBy('created_at','desc')->get();
        return view('admin.page.poule.add')->with('saisons',$saison);
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
        $phase=new Phase();
        $phase->libelle=$request->libelle;
        $phase->saison_id=$request->saison_id;
        
        $phase->save();

        if ($phase) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phase  $phase
     * @return \Illuminate\Http\Response
     */
    public function show(Phase $phase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phase  $phase
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phase=Phase::find($id);
        $saison=Saison::orderBy('created_at','desc')->get();
        return view('admin.page.poule.update')->with('poule',$phase)->with('saisons',$saison);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Phase  $phase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $phase=Phase::find($id);
        $phase->libelle=$request->libelle;
        $phase->saison_id=$request->saison_id;
        
        $phase->save();

        if ($phase) {
            return redirect()->route('administration.poule')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phase  $phase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phase=Phase::find($id);
       
        $phase->delete();
        if ($phase){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
