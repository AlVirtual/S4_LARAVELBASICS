<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    //Mostrar pagina principal de games
    public function index(){
        return view('layouts.index');
    }

    //Mostrar pagina/formulario para crear un game
    public function create(){
        return view('layouts.create');
    }

    //Mostrar pagina/elemento un game
    public function show($game){
        return view('layouts.show', compact('game'));
    }
}
