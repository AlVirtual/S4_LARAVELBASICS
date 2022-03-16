<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Stadium;

class PlayerController extends Controller
{
    //Mostrar pagina principal de players
    public function index(){
        $players = Player::all();
        return view('players.index', compact('players'));
    }

    //Mostrar pagina/formulario para crear un player
    public function create(){
        $teams = Team::all();
        return view('players.create', compact('teams'));
    }

    //Metodo store para guardar datos en db
    public function store(Request $request){
        $player = new Player();

        $player->name = $request->name;
        $player->surname = $request->surname;
        $player->age = $request->age;
        $player->team_id = $request->team;

        
        $player->save();
        return redirect()->route('players.show', $player);

    }

    //Mostrar pagina/elemento player
    public function show(Player $player){
        /* $player = Player::find($id); */
        $teams = Team::all();
        return view('players.show', compact('player','teams'));
    }

    //Editar pagina/elemento un player
    public function edit(Player $player){      
       $teams = Team::all();
       return view('players.edit', compact('player','teams'));
    }
    
    
    //Actualizar pagina/elemento un team
    public function update(Request $request, Player $player){
        
        $player->name = $request->name;
        $player->surname = $request->surname;
        $player->age = $request->age;
        $player->team_id = $request->team;

        $player->save();
        
        return redirect()->route('players.show', compact('player'));
    }
    
    //Eliminar pagina/elemento un team
    public function destroy(Player $player )
    {
        $player->delete();
        return redirect()->route('players.index');
    }
    
}

