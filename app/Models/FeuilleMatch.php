<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeuilleMatch extends Model
{
    use HasFactory;
    protected $fillable = [
        'competition_id',
        'saison_id',
        'club1_id',
        'club2_id',
        'match_id',
        'equipe1',
        'titularisation_equipe1',
        'equipe2',
        'titularisation_equipe2'
    ];

    public function match(){
        return $this->belongsTo('App\Models\Matche','match_id');
    }

    public function competition(){
        return $this->belongsTo('App\Models\Competition','competition_id');
    }

    public function saison(){
        return $this->belongsTo('App\Models\Saison','saisan_id');
    }

    public function club1(){
        return $this->belongsTo('App\Models\Club','club1_id');
    }

    public function club2(){
        return $this->belongsTo('App\Models\Club','club2_id');
    }

    public function joueur_equipe1(){
        return $this->belongsTo('App\Models\Joueur','equipe1');
    }

    public function joueur_equipe2(){
        return $this->belongsTo('App\Models\Joueur','equipe2');
    }
}
