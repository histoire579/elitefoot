<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Arbitre;
use App\Models\Pays;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArbitreController extends Controller
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
        $arbitre=Arbitre::with('pays')->get();
        return view('admin.page.arbitre.index')->with('arbitres',$arbitre);
    }

    public function Add()
    {
        $pays=Pays::orderBy('libelle','asc')->get();
        return view('admin.page.arbitre.add')->with('pays',$pays);
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
        $slug=Str::slug($request->nom);
        $arbitre=new Arbitre();
        $arbitre->nom=$request->nom;
        $arbitre->date_nais=$request->date_nais;
        $arbitre->nationalite=$request->nationalite;
        $arbitre->nationalite_en=$request->nationalite_en;
        $arbitre->lieu_nais=$request->lieu_nais;
        $arbitre->status=$request->status;
        $arbitre->annee_debut_elite=$request->annee_debut_elite;
        $arbitre->pays_id=$request->pays_id;
        $arbitre->slug=$slug;
        if (request()->file('photo')!=null) {
            $photo=request()->file('photo');
            $imageName=$photo->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('photo')->storeAs('public/imgs',$imageName);
            $arbitre->photo=$imageName;
        }else {
            $arbitre->photo=null;
        }
        
        $arbitre->save();

        if ($arbitre) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arbitre  $arbitre
     * @return \Illuminate\Http\Response
     */
    public function show(Arbitre $arbitre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arbitre  $arbitre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pays=Pays::orderBy('libelle','asc')->get();
        $arbitre=Arbitre::find($id);
        return view('admin.page.arbitre.update')->with('arbitre',$arbitre)->with('pays',$pays);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arbitre  $arbitre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slug=Str::slug($request->nom);
        $arbitre=Arbitre::find($id);
        $arbitre->nom=$request->nom;
        $arbitre->date_nais=$request->date_nais;
        $arbitre->nationalite=$request->nationalite;
        $arbitre->nationalite_en=$request->nationalite_en;
        $arbitre->lieu_nais=$request->lieu_nais;
        $arbitre->status=$request->status;
        $arbitre->annee_debut_elite=$request->annee_debut_elite;
        $arbitre->pays_id=$request->pays_id;
        $arbitre->slug=$slug;
        if (request()->file('photo')!=null) {
            if ($arbitre->photo != null) {
                Storage::delete('public/imgs/' .$arbitre->photo);
            }
            $photo=request()->file('photo');
            $imageName=$photo->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('photo')->storeAs('public/imgs',$imageName);
            $arbitre->photo=$imageName;
        }else {
            $arbitre->photo=$arbitre->photo;
        }
        
        $arbitre->save();

        if ($arbitre) {
            return redirect()->route('administration.arbitre')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arbitre  $arbitre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $arbitre=Arbitre::find($id);
        if ($arbitre->photo != null) {
            Storage::delete('public/imgs/' .$arbitre->photo);
        }
        $arbitre->delete();
        if ($arbitre){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
