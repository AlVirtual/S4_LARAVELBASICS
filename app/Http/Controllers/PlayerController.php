<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //Mostrar pagina principal de players
    public function index(){
        return "pagina jugadores";
    }

    //Mostrar pagina/formulario para crear un player
    public function create(){
        return "puedes crear un jugador";
    }

    //Mostrar pagina/elemento player
    public function show($player){
        return "este es el jugador: $player";
    }
}

