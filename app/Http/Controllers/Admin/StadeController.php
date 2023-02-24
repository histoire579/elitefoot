<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StadeController extends Controller
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
        $stade=Stade::all();
        return view('admin.page.stade.index')->with('stades',$stade);
    }

    public function Add()
    {
        return view('admin.page.stade.add');
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
        $stade=new Stade();
        $stade->nom=$request->nom;
        $stade->lieu=$request->lieu;
        $stade->capacite=$request->capacite;
        if (request()->file('photo')!=null) {
            $photo=request()->file('photo');
            $imageName=$photo->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('photo')->storeAs('public/imgs',$imageName);
            $stade->photo=$imageName;
        }else {
            $stade->photo=null;
        }
        
        $stade->save();

        if ($stade) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stade  $stade
     * @return \Illuminate\Http\Response
     */
    public function show(Stade $stade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stade  $stade
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stade=Stade::find($id);
        return view('admin.page.stade.update')->with('stade',$stade);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stade  $stade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stade=Stade::find($id);
        $stade->nom=$request->nom;
        $stade->lieu=$request->lieu;
        $stade->capacite=$request->capacite;
        if (request()->file('photo')!=null) {
            if ($stade->photo != null) {
                Storage::delete('public/imgs/' .$stade->photo);
            }
            $photo=request()->file('photo');
            $imageName=$photo->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('photo')->storeAs('public/imgs',$imageName);
            $stade->photo=$imageName;
        }else {
            $stade->photo=$stade->photo;
        }
        
        $stade->save();

        if ($stade) {
            return redirect()->route('administration.stade')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stade  $stade
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stade=Stade::find($id);
        if ($stade->photo != null) {
            Storage::delete('public/imgs/' .$stade->photo);
        }
        $stade->delete();
        if ($stade){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
