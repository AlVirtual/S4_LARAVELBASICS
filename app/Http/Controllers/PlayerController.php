<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //Mostrar pagina principal de players
    public function index(){
        $players = Player::all();
        return view('players.index', compact('players'));
    }

    //Mostrar pagina/formulario para crear un player
    public function create(){
        return view('players.create');
    }

    //Mostrar pagina/elemento player
    public function show($id){
        $player = Player::find($id);
        return view('players.show', compact('player'));
    }
}

