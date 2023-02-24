<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stade extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'nom',
        'lieu',
        'capacite'
    ];

    public function club(){
        return $this->hasMany('App\Models\Club');
    }

    public function match(){
        return $this->hasMany('App\Models\Match');
    }
}
