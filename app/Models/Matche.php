<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    use HasFactory;
    protected $fillable = [
        'saison_id',
        'competition_id',
        'journee_id',
        'phase_id',
        'stade_id',
        'club1_id',
        'nbre_but_club1',
        'club2_id',
        'nbre_but_club2',
        'arbitre1_id',
        'arbitre2_id',
        'arbitre3_id',
        'arbitre4_id',
        'club_domicile',
        'club_exterieur',
        'date',
        'heure',
        'type',
        'slug'
    ];

    public function saison(){
        return $this->belongsTo('App\Models\Saison','saison_id');
    }

    public function competition(){
        return $this->belongsTo('App\Models\Competition','competition_id');
    }

    public function journee(){
        return $this->belongsTo('App\Models\Journee','journee_id');
    }

    public function phase(){
        return $this->belongsTo('App\Models\Phase','phase_id');
    }

    public function stade(){
        return $this->belongsTo('App\Models\Stade','stade_id');
    }

    public function club1(){
        return $this->belongsTo('App\Models\Club','club1_id');
    }

    public function club2(){
        return $this->belongsTo('App\Models\Club','club2_id');
    }

    public function domicile(){
        return $this->belongsTo('App\Models\Club','club_domicile');
    }

    public function exterieur(){
        return $this->belongsTo('App\Models\Club','club_exterieur');
    }

    public function arbitre1(){
        return $this->belongsTo('App\Models\Arbitre','arbitre1_id');
    }

    public function arbitre2(){
        return $this->belongsTo('App\Models\Arbitre','arbitre2_id');
    }

    public function arbitre3(){
        return $this->belongsTo('App\Models\Arbitre','arbitre3_id');
    }

    public function arbitre4(){
        return $this->belongsTo('App\Models\Arbitre','arbitre4_id');
    }

    public function detail_match(){
        return $this->hasMany('App\Models\DetailMatch');
    }

    public function statistique_joueur(){
        return $this->hasMany('App\Models\StatistiqueJoueur');
    }

    public function statistique_club(){
        return $this->hasMany('App\Models\StatistiqueClub');
    }

    public function resultat(){
        return $this->hasMany('App\Models\Resultat');
    }
}
