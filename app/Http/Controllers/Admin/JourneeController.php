<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journee;
use App\Models\Saison;
use Illuminate\Http\Request;

class JourneeController extends Controller
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
        $journee=Journee::all();
        return view('admin.page.journee.index')->with('journees',$journee);
    }

    public function Add()
    {
        $saison=Saison::orderBy('created_at','desc')->get();
        return view('admin.page.journee.add')->with('saisons',$saison);
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
        $journee=new Journee();
        $journee->libelle=$request->libelle;
        $journee->libelle_en=$request->libelle_en;
        $journee->saison_id=$request->saison_id;
        
        $journee->save();

        if ($journee) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Journee  $journee
     * @return \Illuminate\Http\Response
     */
    public function show(Journee $journee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Journee  $journee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $journee=Journee::find($id);
        $saison=Saison::orderBy('created_at','desc')->get();
        return view('admin.page.journee.update')->with('journee',$journee)->with('saisons',$saison);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Journee  $journee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $journee=Journee::find($id);
        $journee->libelle=$request->libelle;
        $journee->libelle_en=$request->libelle_en;
        $journee->saison_id=$request->saison_id;
        
        $journee->save();

        if ($journee) {
            return redirect()->route('administration.journee')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Journee  $journee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $journee=Journee::find($id);
       
        $journee->delete();
        if ($journee){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
