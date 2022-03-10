<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    //Mostrar pagina principal de games
    public function index(){
        $games = Game::all();
        //return $games;
        return view('games.index', compact('games'));
    }

    //Mostrar pagina/formulario para crear un game
    public function create(){
        return view('games.create');
    }

    //Mostrar pagina/elemento un game
    public function show($id){
        $game = Game::find($id);
        return view('games.show', compact('game'));
    }
}
