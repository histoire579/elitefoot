<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saison extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'libelle_en'
    ];

    public function journee(){
        return $this->hasMany('App\Models\Journee');
    }

    public function phase(){
        return $this->hasMany('App\Models\Phase');
    }

    public function match(){
        return $this->hasMany('App\Models\Match');
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

    public function detail_match(){
        return $this->hasMany('App\Models\DetailMatch');
    }

    public function statistique_club(){
        return $this->hasMany('App\Models\StatistiqueClub');
    }

    public function statistique_joueur(){
        return $this->hasMany('App\Models\StatistiqueJoueur');
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
}
