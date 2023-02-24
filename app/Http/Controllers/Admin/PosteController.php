<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Poste;
use Illuminate\Http\Request;

class PosteController extends Controller
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
        $poste=Poste::all();
        return view('admin.page.poste.index')->with('postes',$poste);
    }

    public function Add()
    {
        return view('admin.page.poste.add');
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
        $poste=new Poste();
        $poste->libelle=$request->libelle;
        $poste->libelle_en=$request->libelle_en;
        
        $poste->save();

        if ($poste) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function show(Poste $poste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poste=Poste::find($id);
        return view('admin.page.poste.update')->with('poste',$poste);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $poste=Poste::find($id);
        $poste->libelle=$request->libelle;
        $poste->libelle_en=$request->libelle_en;
        
        $poste->save();

        if ($poste) {
            return redirect()->route('administration.poste')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poste=Poste::find($id);
       
        $poste->delete();
        if ($poste){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
