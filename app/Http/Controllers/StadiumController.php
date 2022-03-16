<?php

namespace App\Http\Controllers;

use App\Models\Stadium;
use App\Models\Game;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    //Mostrar pagina principal de stadia
    public function index(){
        $stadia = Stadium::all();
        return view('stadia.index', compact('stadia'));
    }

    //Mostrar pagina/formulario para crear un stadium
    public function create(){
        return view('stadia.create');
    }

    //Metodo store para guardar datos en db
    public function store(Request $request){
        $stadium = new Stadium();

        $stadium->name = $request->name;
        $stadium->capacity = $request->capacity;

        $stadium->save();
        return redirect()->route('stadia.show', compact('stadium'));

    }

    //Mostrar pagina/elemento un stadium
    public function show(Stadium $stadium){
        return view('stadia.show', compact('stadium'));
    }


    //Editar pagina/elemento un stadium
    public function edit(Stadium $stadium){
        return view('stadia.edit', compact('stadium'));
    }

    //Actualizar pagina/elemento un stadium
    public function update(Request $request, Stadium $stadium){
        
        $stadium->name = $request->name;
        $stadium->capacity = $request->capacity;

        $stadium->save();
        
        return redirect()->route('stadia.show', compact('stadium'));
    }

    //Eliminar pagina/elemento un Stadium
    public function destroy(Stadium $stadium){
        
        $stadiumgames = Game::where('stadium_id',$stadium->id)->first();
        if(!$stadiumgames){
            $stadium->delete();
            return redirect()->route('stadia.index');
            
        }else{
        return $stadium->name.' te partits assignats';
        }

    }

}
