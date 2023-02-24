<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'lieu',
        'telephone',
        'horaire',
        'horaire_en',
        'maillot_v',
        'gajet_v',
        'tikect_v'
    ];

    public function club(){
        return $this->hasMany('App\Models\Club');
    }
}
