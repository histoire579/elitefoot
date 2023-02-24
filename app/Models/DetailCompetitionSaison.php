<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCompetitionSaison extends Model
{
    use HasFactory;
    protected $fillable = [
        'saison_id',
        'competition_id',
        'club_id',
        'phase_id'
    ];

    public function saison(){
        return $this->belongsTo('App\Models\Saison','saison_id');
    }

    public function competition(){
        return $this->belongsTo('App\Models\Competition','competition_id');
    }

    public function club(){
        return $this->belongsTo('App\Models\Club','club_id');
    }

    public function phase(){
        return $this->belongsTo('App\Models\Phase','phase_id');
    }
}
