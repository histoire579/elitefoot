<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arbitre extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'nom',
        'date_nais',
        'pays_id',
        'nationalite',
        'nationalite_en',
        'lieu_nais',
        'status',
        'annee_debut_elite',
        'slug'
    ];

    public function match(){
        return $this->hasMany('App\Models\Match');
    }

    public function pays(){
        return $this->belongsTo('App\Models\Pays','pays_id');
    }
}
