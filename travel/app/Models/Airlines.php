<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;//ezt be kell másolni


class Airlines extends Model
{
    use HasFactory;

    protected $primaryKey = 'airline_id';//megadtuk a kulcsát a táblának

    protected $fillable = [
        'name',
        'country',
        
    ];

}
