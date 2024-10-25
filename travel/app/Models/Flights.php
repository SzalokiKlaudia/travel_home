<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;//ezt be kell másolni


class Flights extends Model
{
    use HasFactory;

    protected $primaryKey = 'flight_id';//megadtuk a kulcsát a táblának

    protected $fillable = [
        'date',
        'airline_id',
        'limit'
        
    ];

}
