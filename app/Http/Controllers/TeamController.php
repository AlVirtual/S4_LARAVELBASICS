<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    //Mostrar pagina principal de teams
    public function index(){
        return view('teams.index');
    }

    //Mostrar pagina/formulario para crear un team
    public function create(){
        return view('teams.create');
    }

    //Mostrar pagina/elemento un team
    public  function show($team){
        return view('teams.show', compact('team'));
    }
}
