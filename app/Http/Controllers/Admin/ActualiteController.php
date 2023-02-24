<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ActualiteController extends Controller
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
        $actualite=Actualite::all();
        return view('admin.page.actualite.index')->with('actualites',$actualite);
    }

    public function Add()
    {
        return view('admin.page.actualite.add');
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
        $date = Date::now();
        $actualite=new Actualite();
        $slug=Str::slug($request->titre);
        $actualite->titre=$request->titre;
        $actualite->titre_en=$request->titre_en;
        $actualite->short=$request->short;
        $actualite->short_en=$request->short_en;
        $actualite->message=$request->message;
        $actualite->message_en=$request->message_en;
        if (request()->file('photo')!=null) {
            $photo=request()->file('photo');
            $imageName=$photo->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('photo')->storeAs('public/imgs',$imageName);
            $actualite->photo=$imageName;
        }else {
            $actualite->photo=null;
        }
        $actualite->slug=$slug;
        $actualite->dates=$date;
        $actualite->save();

        if ($actualite) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actualite=Actualite::find($id);
        return view('admin.page.actualite.update')->with('actualite',$actualite);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $date = Date::now();
        $actualite=Actualite::find($id);
        $slug=Str::slug($request->titre);
        $actualite->titre=$request->titre;
        $actualite->titre_en=$request->titre_en;
        $actualite->short=$request->short;
        $actualite->short_en=$request->short_en;
        $actualite->message=$request->message;
        $actualite->message_en=$request->message_en;
        if (request()->file('photo')!=null) {
            if ($actualite->photo != null) {
                Storage::delete('public/imgs/' .$actualite->photo);
            }
            $photo=request()->file('photo');
            $imageName=$photo->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('photo')->storeAs('public/imgs',$imageName);
            $actualite->photo=$imageName;
        }else {
            $actualite->photo=$actualite->photo;
        }
        $actualite->slug=$slug;
        $actualite->dates=$date;
        $actualite->save();

        if ($actualite) {
            return redirect()->route('administration.actualite')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actualite=Actualite::find($id);
        if ($actualite->photo != null) {
            Storage::delete('public/imgs/' .$actualite->photo);
        }
        $actualite->delete();
        if ($actualite){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
