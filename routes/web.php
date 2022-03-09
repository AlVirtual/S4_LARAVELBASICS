<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    //return view('welcome');
    return "pagina principal";
});
//--------------------------- Routes STADIA ---------------------------------
Route::get('stadia', function () {
    return "pagina de estadios";
});
Route::get('stadia/{stadium}', function ($stadium) {
    return "este es el estadio: $stadium";
});

//--------------------------- Routes PLAYERS ---------------------------------
Route::get('players', function () {
    return "pagina jugadores";
});

Route::get('players/{player}', function ($player) {
    return "este es el jugador: $player";
});

//--------------------------- Routes GAMES ---------------------------------
Route::get('games', function () {
    return "pagina de partidos";
});

Route::get('games/{game}', function ($game) {
    return "detalles del partido: $game";
});

//--------------------------- Routes TEAMS ---------------------------------
Route::get('teams', function () {
    return "pagina de equipos";
});

Route::get('teams/{team}', function ($team) {
    return "este es el equipo: $team";
});


