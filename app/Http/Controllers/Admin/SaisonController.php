<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Saison;
use Illuminate\Http\Request;

class SaisonController extends Controller
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
        $saison=Saison::all();
        return view('admin.page.saison.index')->with('saisons',$saison);
    }

    public function Add()
    {
        return view('admin.page.saison.add');
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
        $saison=new Saison();
        $saison->libelle=$request->libelle;
        $saison->libelle_en=$request->libelle_en;
        
        $saison->save();

        if ($saison) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saison  $saison
     * @return \Illuminate\Http\Response
     */
    public function show(Saison $saison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saison  $saison
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saison=Saison::find($id);
        return view('admin.page.saison.update')->with('saison',$saison);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Saison  $saison
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $saison=Saison::find($id);
        $saison->libelle=$request->libelle;
        $saison->libelle_en=$request->libelle_en;
        
        $saison->save();

        if ($saison) {
            return redirect()->route('administration.saison')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saison  $saison
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $saison=Saison::find($id);
       
        $saison->delete();
        if ($saison){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
