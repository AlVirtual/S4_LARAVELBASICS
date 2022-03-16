<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    // Relacion 1-1 inversa. Recupera datos del stadium. 1 Game pertence a un Stadium.
    public function stadium()
    {
        return $this->belongsTo('App\Models\Stadium');
    }

    // Relacion 1-n inversa. Recupera datos de team. 1 Team pertence a un Game. Local y Visitante
    public function teamL()
    {
        return $this->belongsTo('App\Models\Team', 'local_team_id', 'id');
    }

    public function teamV()
    {
        return $this->belongsTo('App\Models\Team', 'visitor_team_id', 'id');
    }
}
