<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StadiumController extends Controller
{
    //Mostrar pagina principal de stadia
    public function index(){
        return view('stadia.index');
    }

    //Mostrar pagina/formulario para crear un stadium
    public function create(){
        return view('stadia.create');
    }

    //Mostrar pagina/elemento un stadium
    public function show($stadium){
        return view('stadia.show', compact('stadium'));
    }
}
