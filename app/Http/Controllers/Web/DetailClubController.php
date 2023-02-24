<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Saison;
use App\Models\Poste;
use App\Models\Matche;
use App\Models\DetailClubSaison;
use App\Models\PalmaresClub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  int  $club_id
     * @return \Illuminate\Http\Response
     */
    public function index_elite_one($club_id)
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $saison_id = $saisons->max('id');
        $gard = Poste::where('libelle', 'Gardien')->first();
        $def = Poste::where('libelle', 'Défenseur')->first();
        $mil = Poste::where('libelle', 'Milieu')->first();
        $attaq = Poste::where('libelle', 'Attaquant')->first();
        $gardiens = DetailClubSaison::with('joueur')->where([['saison_id', $saison_id],['poste_id', $gard->id]])->get();
        $nbre_gard = $gardiens->count('id');
        $defenseurs = DetailClubSaison::with('joueur')->where([['saison_id', $saison_id],['poste_id', $def->id]])->get();
        $nbre_def = $defenseurs->count('id');
        $milieux = DetailClubSaison::with('joueur')->where([['saison_id', $saison_id],['poste_id', $mil->id]])->get();
        $nbre_mil = $milieux->count('id');
        $attaquants = DetailClubSaison::with('joueur')->where([['saison_id', $saison_id],['poste_id', $attaq->id]])->get();
        $nbre_attaq = $attaquants->count('id');
        $club = Club::with('stade','boutique')->where('id', $club_id)->first();
        $calendiers = Matche::with('competition','journee','club1','club2','stade')->where([['saison_id', $saison_id],['type', 'Calendier'],['club1_id', $club_id]])->paginate(10);
        $resultats = Matche::with('competition','journee','club1','club2','stade')->where([['saison_id', $saison_id],['type', 'Resultat'],['club1_id', $club_id]])->paginate(10);
        $palmares_clubs = PalmaresClub::with('saison','competition')->where('club_id', $club_id)->get();
        //dd($club);
        return view('elite1.detail_club')
        ->with('saisons', $saisons)
        ->with('club', $club)
        ->with('gardiens', $gardiens)
        ->with('defenseurs', $defenseurs)
        ->with('milieux', $milieux)
        ->with('attaquants', $attaquants)
        ->with('nbre_gard', $nbre_gard)
        ->with('nbre_def', $nbre_def)
        ->with('nbre_mil', $nbre_mil)
        ->with('nbre_attaq', $nbre_attaq)
        ->with('calendiers', $calendiers)
        ->with('resultats', $resultats)
        ->with('palmares_clubs', $palmares_clubs);
    }
    /**
     * Display a listing of the resource.
     *
     * @param  int  $club_id
     * @return \Illuminate\Http\Response
     */
    public function index_elite_two()
    {
        
    }
    /**
     * Display a listing of the resource.
     *
     * @param  int  $club_id
     * @return \Illuminate\Http\Response
     */
    public function index_elite_guinness()
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
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        //
    }
}
