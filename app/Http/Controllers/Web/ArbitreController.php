<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Arbitre;
use App\Models\Saison;
use Illuminate\Http\Request;

class ArbitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_arbitre_one()
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $saison_id = $saisons->max('id');
        return view('elite1.arbitre')
        ->with('saisons', $saisons);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_arbitre_two()
    {
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_arbitre_guinness()
    {
        
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
        //
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
    public function edit(Arbitre $arbitre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arbitre  $arbitre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arbitre $arbitre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arbitre  $arbitre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arbitre $arbitre)
    {
        //
    }
}
