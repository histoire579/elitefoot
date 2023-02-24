<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publicite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PubController extends Controller
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
        $publicite=Publicite::all();
        return view('admin.page.pub.index')->with('publicites',$publicite);
    }

    public function Add()
    {
        return view('admin.page.pub.add');
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
        $publicite=new Publicite();
        $publicite->raison_sociale=$request->raison_sociale;
        $publicite->site=$request->site;
        $publicite->debut=$request->debut;
        $publicite->fin=$request->fin;
        if (request()->file('image')!=null) {
            $image=request()->file('image');
            $imageName=$image->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $publicite->image=$imageName;
        }
        
        $publicite->save();

        if ($publicite) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicite  $publicite
     * @return \Illuminate\Http\Response
     */
    public function show(Publicite $publicite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicite  $publicite
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicite=Publicite::find($id);
        return view('admin.page.pub.update')->with('pub',$publicite);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicite  $publicite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $publicite=Publicite::find($id);
        $publicite->raison_sociale=$request->raison_sociale;
        $publicite->site=$request->site;
        $publicite->debut=$request->debut;
        $publicite->fin=$request->fin;
        if (request()->file('image')!=null) {
            if ($publicite->image != null) {
                Storage::delete('public/imgs/' .$publicite->image);
            }
            $image=request()->file('image');
            $imageName=$image->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('image')->storeAs('public/imgs',$imageName);
            $publicite->image=$imageName;
        }else{
            $publicite->image=$publicite->image;
        }
        
        $publicite->save();

        if ($publicite) {
            return redirect()->route('administration.pub')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicite  $publicite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicite=Publicite::find($id);
        if ($publicite->image != null) {
            Storage::delete('public/imgs/' .$publicite->image);
        }
        $publicite->delete();
        if ($publicite){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
