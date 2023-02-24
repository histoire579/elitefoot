<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatistiqueJoueur extends Model
{
    use HasFactory;
    protected $fillable = [
        'saison_id',
        'match_id',
        'joueur_id',
        'tir',
        'tir_cadre',
        'but_marque',
        'passe_decisive',
        'ballon_recupere',
        'ballon_intercepte',
        'tir_arrete',
        'but_encaisse',
        'faute_comise',
        'hors_jeux',
        'minute_jouer',
        'faute_subis',
        'carton_jaune',
        'carton_rouge',
        'centre',
        'penelty_marque',
        'Coup_franc_marque',
        'passe_reussi',
        'penalty_arrete',
        'penalty_concede',
        'but_contre_camp',
        'homme_match',
        'domiciliation'
    ];

    public function saison(){
        return $this->belongsTo('App\Models\Saison','saison_id');
    }

    public function match(){
        return $this->belongsTo('App\Models\Matche','match_id');
    }

    public function joueur(){
        return $this->belongsTo('App\Models\Joueur','joueur_id');
    }
}
