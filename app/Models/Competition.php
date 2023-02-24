<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'libelle_en'
    ];

    public function match(){
        return $this->hasMany('App\Models\Match');
    }

    public function detail_competition_saison(){
        return $this->hasMany('App\Models\DetailCompetitionSaison');
    }

    public function classement(){
        return $this->hasMany('App\Models\Classement');
    }

    public function palmares_club(){
        return $this->hasMany('App\Models\PalmaresClub');
    }

    public function palmares_joueur(){
        return $this->hasMany('App\Models\PalmaresJoueur');
    }

    public function feuille_match(){
        return $this->hasMany('App\Models\FeuilleMatch');
    }
}
