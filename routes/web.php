<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\TeamController;

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

Route::get('/', HomeController::class);

   
//--------------------------- Routes STADIA ---------------------------------
Route::get('stadia', [StadiumController::class, 'index'])->name('stadia.index');
Route::get('stadia/create', [StadiumController::class, 'create'])->name('stadia.create');
Route::get('stadia/{id}', [StadiumController::class, 'show'])->name('stadia.show');


//--------------------------- Routes PLAYERS ---------------------------------
Route::get('players', [PlayerController::class, 'index'])->name('players.index');
Route::get('players/create', [PlayerController::class, 'create'])->name('players.create');
Route::get('players/{id}', [PlayerController::class, 'show'])->name('players.show');
    

//--------------------------- Routes GAMES ---------------------------------
Route::get('games', [GameController::class, 'index'])->name('games.index');
Route::get('games/create', [GameController::class, 'create'])->name('games.create');
Route::get('games/{id}', [GameController::class, 'show'])->name('games.show');


//--------------------------- Routes TEAMS ---------------------------------
Route::get('teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('teams/create', [TeamController::class, 'create'])->name('teams.create');
Route::get('teams/{id}', [TeamController::class, 'show'])->name('teams.show');


