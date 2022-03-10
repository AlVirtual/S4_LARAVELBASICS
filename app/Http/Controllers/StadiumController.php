<?php

namespace App\Http\Controllers;

use App\Models\Stadium;
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

    //Mostrar pagina/elemento un stadium
    public function show($id){
        $stadium = Stadium::find($id);
        return view('stadia.show', compact('stadium'));
    }
}
