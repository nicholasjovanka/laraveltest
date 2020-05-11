<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    protected $fillable = [
        'gameName', 'gameImage', 'gameDescription', 'gameTrailer','platform'
    ];
}
