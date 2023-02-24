<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PalmaresJoueur extends Model
{
    use HasFactory;
    protected $fillable = [
        'saison_id',
        'competition_id',
        'joueur_id',
        'recompence',
        'recompence_en'
    ];

    public function saison(){
        return $this->belongsTo('App\Models\Saison','saison_id');
    }

    public function competition(){
        return $this->belongsTo('App\Models\Competition','competition_id');
    }

    public function joueur(){
        return $this->belongsTo('App\Models\Joueur','joueur_id');
    }
}
