<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaysController extends Controller
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
        $pays=Pays::all();
        return view('admin.page.pays.index')->with('pays',$pays);
    }

    public function Add()
    {
        return view('admin.page.pays.add');
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
        $pays=new Pays();
        $pays->libelle=$request->libelle;
        $pays->libelle_en=$request->libelle_en;
        if (request()->file('drapeau')!=null) {
            $photo=request()->file('drapeau');
            $imageName=$photo->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('drapeau')->storeAs('public/imgs',$imageName);
            $pays->drapeau=$imageName;
        }
        $pays->save();

        if ($pays) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function show(Pays $pays)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pays=Pays::find($id);
        return view('admin.page.pays.update')->with('pays',$pays);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pays=Pays::find($id);
        $pays->libelle=$request->libelle;
        $pays->libelle_en=$request->libelle_en;
        if (request()->file('drapeau')!=null) {
            if ($pays->drapeau != null) {
                Storage::delete('public/imgs/' .$pays->drapeau);
            }
            $photo=request()->file('drapeau');
            $imageName=$photo->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('drapeau')->storeAs('public/imgs',$imageName);
            $pays->drapeau=$imageName;
        }
        $pays->save();

        if ($pays) {
            return redirect()->route('administration.pays')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pays=Pays::find($id);
        if ($pays->drapeau != null) {
            Storage::delete('public/imgs/' .$pays->drapeau);
        }
        $pays->delete();
        if ($pays){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
