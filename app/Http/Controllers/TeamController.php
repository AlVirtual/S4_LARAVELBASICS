<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTeamRequest;
use App\Models\Team;
use App\Models\Stadium;

class TeamController extends Controller
{
    //Mostrar pagina principal de teams
    public function index(){
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    //Mostrar pagina/formulario para crear un team
    public function create(){
        $stadia = Stadium::all();
        
        return view('teams.create', compact('stadia'));
    }

    //Metodo store para guardar datos en db
    public function store(StoreTeamRequest $request){
        $team = new Team();

        $team->name = $request->name;
        $team->stadium_id = $request->stadium;

        
        $team->save();
        return redirect()->route('teams.show', $team);

    }

    //Mostrar pagina/elemento un team
    public function show($id){
        $team = Team::find($id);
        return view('teams.show', compact('team'));
    }


     //Editar pagina/elemento un team
    public function edit(Team $team){      
        $stadia = Stadium::all();
        return view('teams.edit', compact('team','stadia'));
    }


    //Actualizar pagina/elemento un team
    public function update(Request $request, Team $team){
        
        $team->name = $request->name;
        $team->stadium_id = $request->stadium;

        $team->save();
        
        return redirect()->route('teams.show', compact('team'));
    }

    //Eliminar pagina/elemento un team
    public function destroy(Team $team )
    {
        $team->delete();
    }
}
