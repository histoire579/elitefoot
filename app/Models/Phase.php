<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'saison_id'
    ];

    public function saison(){
        return $this->belongsTo('App\Models\Saison','saison_id');
    }

    public function match(){
        return $this->hasMany('App\Models\Match');
    }

    public function detail_competition_saison(){
        return $this->hasMany('App\Models\DetailCompetitionSaison');
    }
}
