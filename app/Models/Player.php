<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    //relacion 1-n inversa. Recupera team del player
    public function team()
    {
        return $this->belongsTo('App\Models\Team');
    }
}
