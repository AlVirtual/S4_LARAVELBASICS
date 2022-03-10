<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StadiumController extends Controller
{
    //Mostrar pagina principal de stadia
    public function index(){
        return "pagina de estadios";
    }

    //Mostrar pagina/formulario para crear un stadium
    public function create(){
        return "puedes crear un estadio";
    }

    //Mostrar pagina/elemento un stadium
    public function show($stadium){
        return "este es el estadio: $stadium";
    }
}
