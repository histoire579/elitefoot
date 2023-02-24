<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classement;
use App\Models\Saison;
use App\Models\Club;
use App\Models\Competition;
use Illuminate\Http\Request;

class ClassementController extends Controller
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
        $classement=Classement::with('competition','saison','club')->orderBy('point','desc')->get();
        return view('admin.page.classement.index')->with('classements',$classement);
    }

    public function Add()
    {
        $saison=Saison::orderBy('created_at','desc')->get();
        $club=Club::orderBy('nom','asc')->get();
        $competition=Competition::all();
        return view('admin.page.classement.add')->with('saisons',$saison)
                    ->with('competitions',$competition);
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
        
        //dd($request->club);
        if ($request->club !=null) {
            foreach ($request->club as  $value) {
                $classement=new Classement();
                $classement->competition_id=$request->competition_id;
                $classement->saison_id=$request->saison_id;
                $classement->club_id=$value;
                $classement->point=0;
                $classement->save();
            } 
        }

        if ($classement) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classement  $classement
     * @return \Illuminate\Http\Response
     */
    public function show(Classement $classement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classement  $classement
     * @return \Illuminate\Http\Response
     */
    public function edit(Classement $classement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classement  $classement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classement $classement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classement  $classement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classement $classement)
    {
        //
    }
}
