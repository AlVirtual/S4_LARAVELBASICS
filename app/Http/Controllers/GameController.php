<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use App\Models\Stadium;
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
        $teams = Team::all();
        $stadia = Stadium::all();
        return view('games.create', compact('teams','stadia'));
    }

        //Metodo store para guardar datos en db
        public function store(Request $request){
            $game = new Game();
    
            $game->date = $request->date;
            $game->local_team_id = $request->teamL;
            $game->visitor_team_id = $request->teamV;
            $game->stadium_id = $request->stadium;
    
            
            $game->save();
            return redirect()->route('games.show', $game);
    
        }

    //Mostrar pagina/elemento un game
    public function show($id){
        $game = Game::find($id);
        return view('games.show', compact('game'));
    }

         //Editar pagina/elemento un gamer
         public function edit(Game $game){      
            $teams = Team::all();
            $stadia = Stadium::all();
            return view('games.edit', compact('game','teams','stadia'));
        }

                //Actualizar pagina/elemento un game
                public function update(Request $request, Game $game){
                                  
                    $game->date = $request->date;
                    $game->local_team_id = $request->teamL;
                    $game->visitor_team_id = $request->teamV;
                    $game->goals_local = $request->goalsL;
                    $game->goals_visitor = $request->goalsV;
                    $game->stadium_id = $request->stadium;
                    
                    $game->stadium_id = $request->stadium;
                                                            
                    $game->save();
                    return redirect()->route('games.show', $game);
                }
            
                //Eliminar pagina/elemento un game
                public function destroy(Game $game )
                {
                    $game->delete();
                }
}
