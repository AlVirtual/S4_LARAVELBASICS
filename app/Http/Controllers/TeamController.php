<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    //Mostrar pagina principal de teams
    public function index(){
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    //Mostrar pagina/formulario para crear un team
    public function create(){
        return view('teams.create');
    }

    //Mostrar pagina/elemento un team
    public function show($id){
        $team = Team::find($id);
        return view('teams.show', compact('team'));
    }
}
