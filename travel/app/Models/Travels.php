<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;//ezt be kell másolni


class Travels extends Model
{
    use HasFactory;

    protected $primaryKey = 'travel_id';//megadtuk a kulcsát a táblának

    protected $fillable = [
        'evaluation',
        'flight_id',
        'user_id'
        
    ];
}
