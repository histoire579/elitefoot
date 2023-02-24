<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'libelle_en',
        'drapeau',
    ];

    public function joueurs(){
        return $this->hasMany('App\Models\Joueur');
    }

    public function arbitres(){
        return $this->hasMany('App\Models\Arbitre');
    }
}
