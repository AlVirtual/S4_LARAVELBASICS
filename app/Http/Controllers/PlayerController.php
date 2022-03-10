<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //Mostrar pagina principal de players
    public function index(){
        return view('players.index');
    }

    //Mostrar pagina/formulario para crear un player
    public function create(){
        return view('players.create');
    }

    //Mostrar pagina/elemento player
    public function show($player){
        return view('players.show', compact('player'));
    }
}

