<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;

class Team extends Model
{
    use HasFactory;

    //relacion 1-1 inversa (la llave foranea está en esta tabla) para recuperar datos de stadium
    public function stadium()
    {
        return $this->belongsTo('App\Models\Stadium');
    }

    //Relacion 1-n para jugadores. Recupera players del team
    public function players()
    {
        return $this->hasMany('App\Models\Player');
    }


    //Relacion 1-n. Recupera games del team. Local y Visitante
    public function gamesL()
    {
        return $this->hasMany('App\Models\Game', 'local_team_id');
    }

    public function gamesV()
    {
        return $this->hasMany('App\Models\Game', 'visitor_team_id');
    }
}
