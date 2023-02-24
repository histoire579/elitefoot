<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Stade;
use App\Models\Boutique;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
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
        $club=Club::all();
        return view('admin.page.club.index')->with('club',$club);
    }

    public function Add()
    {
        $stade=Stade::orderBy('nom','asc')->get();
        $boutique=Boutique::orderBy('libelle','asc')->get();
        return view('admin.page.club.add')->with('stades',$stade)->with('boutiques',$boutique);
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
        $club=new Club();
        $club->nom=$request->nom;
        $club->siege=$request->siege;
        $club->bp=$request->bp;
        $club->telephone=$request->telephone;
        $club->email=$request->email;
        $club->site=$request->site;
        $club->twitter=$request->twitter;
        $club->facebook=$request->facebook;

        $club->president=$request->president;
        $club->v_president=$request->v_president;
        $club->secretaire_g=$request->secretaire_g;
        $club->coach_p=$request->coach_p;
        $club->coach_ad=$request->coach_ad;
        $club->stade_id=$request->stade_id;
        $club->boutique_id=$request->boutique_id;
        $club->annee_creation=$request->annee_creation;
        $club->slug=$slug;
        if (request()->file('logo')!=null) {
            $photo=request()->file('logo');
            $imageName=$photo->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('logo')->storeAs('public/imgs',$imageName);
            $club->logo=$imageName;
        }
        
        $club->save();

        if ($club) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stade=Stade::orderBy('nom','asc')->get();
        $boutique=Boutique::orderBy('libelle','asc')->get();
        $club=Club::find($id);
        return view('admin.page.club.update')->with('club',$club)->with('stades',$stade)->with('boutiques',$boutique);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slug=Str::slug($request->nom);
        $club=Club::find($id);
        $club->nom=$request->nom;
        $club->siege=$request->siege;
        $club->bp=$request->bp;
        $club->telephone=$request->telephone;
        $club->email=$request->email;
        $club->site=$request->site;
        $club->twitter=$request->twitter;
        $club->facebook=$request->facebook;

        $club->president=$request->president;
        $club->v_president=$request->v_president;
        $club->secretaire_g=$request->secretaire_g;
        $club->coach_p=$request->coach_p;
        $club->coach_ad=$request->coach_ad;
        $club->stade_id=$request->stade_id;
        $club->boutique_id=$request->boutique_id;
        $club->annee_creation=$request->annee_creation;
        $club->slug=$slug;
        if (request()->file('logo')!=null) {
            if ($club->logo != null) {
                Storage::delete('public/imgs/' .$club->logo);
            }
            $photo=request()->file('logo');
            $imageName=$photo->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('logo')->storeAs('public/imgs',$imageName);
            $club->logo=$imageName;
        }else {
            $club->logo=$club->logo;
        }
        
        $club->save();

        if ($club) {
            return redirect()->route('administration.club')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club=Club::find($id);
        if ($club->logo != null) {
            Storage::delete('public/imgs/' .$club->logo);
        }
        $club->delete();
        if ($club){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
