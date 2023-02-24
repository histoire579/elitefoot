<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journee extends Model
{
    use HasFactory;
    protected $fillable = [
        'saison_id',
        'libelle',
        'libelle_en'
    ];

    public function saison(){
        return $this->belongsTo('App\Models\Saison','saison_id');
    }

    public function match(){
        return $this->hasMany('App\Models\Match');
    }

    public function resultat(){
        return $this->hasMany('App\Models\Resultat');
    }

    
}
