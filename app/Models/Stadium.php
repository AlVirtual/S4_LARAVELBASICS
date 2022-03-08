<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    use HasFactory;

    //Relacion 1-1. Acceder al nombre de equipo. La llave foranea está en teams.
    public function team(){
        return $this->hasOne('App\Models\Team');
    }
}
