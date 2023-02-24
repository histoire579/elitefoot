<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMatch extends Model
{
    use HasFactory;    
    protected $fillable = [
        'saison_id',
        'match_id',
        'club1_id',
        'nbre_but_club1',
        'club2_id',
        'nbre_but_club2',
        'possession_club1',
        'possession_club2',
        'nbre_tir_club1',
        'nbre_tir_club2',
        'nbre_tir_cadre_club1',
        'nbre_tir_cadre_club2',
        'nbre_tir_arrete_club1',
        'nbre_tir_arrete_club2',
        'nbre_faute_club1',
        'nbre_faute_club2',
        'nbre_hors_jeu_club1',
        'nbre_hors_jeu_club2',
        'nbre_carton_jaune_club1',
        'nbre_carton_jaune_club2',
        'nbre_carton_rouge_club1',
        'nbre_carton_rouge_club2',
        'nbre_corner_club1',
        'nbre_corner_club2',
        'nbre_centre_club1',
        'nbre_centre_club2',
        'nbre_tacle_club1',
        'nbre_tacle_club2',
        'nbre_coup_franc_club1',
        'nbre_coup_franc_club2',
        'nbre_interception_club1',
        'nbre_interception_club2',
        'nbre_passe_reussie_club1',
        'nbre_passe_reussie_club2',
    ];

    public function saison(){
        return $this->belongsTo('App\Models\Saison','saison_id');
    }

    public function match(){
        return $this->belongsTo('App\Models\Matche','match_id');
    }

    public function club1(){
        return $this->belongsTo('App\Models\Club','club1_id');
    }

    public function club2(){
        return $this->belongsTo('App\Models\Club','club2_id');
    }
}
