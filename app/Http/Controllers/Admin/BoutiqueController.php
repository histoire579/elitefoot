<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Boutique;
use Illuminate\Http\Request;

class BoutiqueController extends Controller
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
        $boutique=Boutique::all();
        return view('admin.page.boutique.index')->with('boutiques',$boutique);
    }

    public function Add()
    {
        return view('admin.page.boutique.add');
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
        $boutique=new Boutique();
        $boutique->libelle=$request->libelle;
        $boutique->lieu=$request->lieu;
        $boutique->telephone=$request->telephone;
        $boutique->horaire=$request->horaire;
        $boutique->horaire_en=$request->horaire_en;
        $boutique->maillot_v=$request->maillot_v;
        $boutique->gajet_v=$request->gajet_v;
        $boutique->tikect_v=$request->tikect_v;
        
        $boutique->save();

        if ($boutique) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function show(Boutique $boutique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $boutique=Boutique::find($id);
        return view('admin.page.boutique.update')->with('boutique',$boutique);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $boutique=Boutique::find($id);
        $boutique->libelle=$request->libelle;
        $boutique->lieu=$request->lieu;
        $boutique->telephone=$request->telephone;
        $boutique->horaire=$request->horaire;
        $boutique->horaire_en=$request->horaire_en;
        $boutique->maillot_v=$request->maillot_v;
        $boutique->gajet_v=$request->gajet_v;
        $boutique->tikect_v=$request->tikect_v;
        
        $boutique->save();

        if ($boutique) {
            return redirect()->route('administration.boutique')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boutique=Boutique::find($id);
       
        $boutique->delete();
        if ($boutique){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
