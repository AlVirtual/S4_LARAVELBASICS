<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    //Mostrar pagina principal de teams
    public function index(){
        return "Todos los equipos";
    }

    //Mostrar pagina/formulario para crear un team
    public function create(){
        return "puedes cear un equipo";
    }

    //Mostrar pagina/elemento un team
    public  function show($team){
        return "este es el equipo:$team";
    }
}
