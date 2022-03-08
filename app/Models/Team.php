<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    //relacion 1-1 inversa (la llave foranea está en esta tabla) para recuperar datos de stadium
    public function stadium(){
        return $this->belongsTo('App\Models\Stadium');

    }

    //Relacion 1-n para jugadores. Recupera players del team
    public function players(){
        return $this->hasMany('App\Models\Player');
    }


    public function games(){
        return $this->hasMany('App\Models\Games', 'team_id_L');
        
    }

}
