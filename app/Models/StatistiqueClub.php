<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatistiqueClub extends Model
{
    use HasFactory;
    protected $fillable = [
        'saison_id',
        'match_id',
        'club_id',
        'tir_cadre',
        'but_marque',
        'but_encaisse',
        'faute_comise',
        'hors_jeux',
        'carton_jaune',
        'carton_rouge',
        'penelty_marque',
        'Coup_franc_marque',
        'penalty_concede'
    ];

    public function saison(){
        return $this->belongsTo('App\Models\Saison','saison_id');
    }

    public function match(){
        return $this->belongsTo('App\Models\Match','match_id');
    }

    public function club(){
        return $this->belongsTo('App\Models\Club','club_id');
    }
}
