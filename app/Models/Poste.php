<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'libelle_en'
    ];

    public function detail_club_saison(){
        return $this->hasMany('App\Models\DetailClubSaison');
    }
}
