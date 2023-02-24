<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailClubSaison extends Model
{
    use HasFactory;
    protected $fillable = [
        'saison_id',
        'club_id',
        'joueur_id',
        'poste_id',
        'dorssad'
    ];

    public function saison(){
        return $this->belongsTo('App\Models\Saison','saison_id');
    }

    public function club(){
        return $this->belongsTo('App\Models\Club','club_id');
    }

    public function joueur(){
        return $this->belongsTo('App\Models\Joueur','joueur_id');
    }

    public function poste(){
        return $this->belongsTo('App\Models\Poste','poste_id');
    }
}
