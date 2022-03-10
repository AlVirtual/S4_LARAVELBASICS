<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    //Mostrar pagina principal de games
    public function index(){
        return "pagina de games";
    }

    //Mostrar pagina/formulario para crear un game
    public function create(){
        return "puedes crear un game";
    }

    //Mostrar pagina/elemento un game
    public function show($game){
        return "este es el estadio: $game";
    }
}
