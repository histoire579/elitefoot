<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'titre',
        'titre_en',
        'short',
        'short_en',
        'message',
        'message_en',
        'dates',
        'slug'
    ];
}
