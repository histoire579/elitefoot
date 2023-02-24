<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'nom',
        'siege',
        'bp',
        'telephone',
        'email',
        'site',
        'twitter',
        'facebook',
        'president',
        'v_president',
        'secretaire_g',
        'coach_p',
        'coach_ad',
        'stade_id',
        'boutique_id',
        'annee_creation',
        'slug'
    ];

    public function stade(){
        return $this->belongsTo('App\Models\Stade','stade_id');
    }

    public function boutique(){
        return $this->belongsTo('App\Models\Boutique','boutique_id');
    }

    public function match(){
        return $this->hasMany('App\Models\Matche');
    }

    public function detail_match(){
        return $this->hasMany('App\Models\DetailMatch');
    }

    public function feuille_match(){
        return $this->hasMany('App\Models\FeuilleMatch');
    }

    public function detail_competition_saison(){
        return $this->hasMany('App\Models\DetailCompetitionSaison');
    }

    public function detail_club_saison(){
        return $this->hasMany('App\Models\DetailClubSaison');
    }

    public function statistique_club(){
        return $this->hasMany('App\Models\StatistiqueClub');
    }

    public function classement(){
        return $this->hasMany('App\Models\Classement');
    }

    public function palmares_club(){
        return $this->hasMany('App\Models\PalmaresClub');
    }
}
