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
Route::post('stadia', [StadiumController::class, 'store'])->name('stadia.store');
Route::get('stadia/{stadium}', [StadiumController::class, 'show'])->name('stadia.show');
Route::get('stadia/{stadium}/edit', [StadiumController::class, 'edit'])->name('stadia.edit');
Route::put('stadia/{stadium}', [StadiumController::class, 'update'])->name('stadia.update');
Route::delete('stadia/{stadium}', [StadiumController::class, 'destroy'])->name('stadia.destroy');


//--------------------------- Routes PLAYERS ---------------------------------
Route::get('players', [PlayerController::class, 'index'])->name('players.index');
Route::get('players/create', [PlayerController::class, 'create'])->name('players.create');
Route::post('players', [PLayerController::class, 'store'])->name('players.store');
Route::get('players/{id}', [PlayerController::class, 'show'])->name('players.show');
Route::get('players/{player}/edit', [PlayerController::class, 'edit'])->name('players.edit');
Route::put('players/{player}', [PlayerController::class, 'update'])->name('players.update');
Route::delete('players/{player}', [PaayerController::class, 'destroy'])->name('players.destroy');



//--------------------------- Routes GAMES ---------------------------------
Route::get('games', [GameController::class, 'index'])->name('games.index');
Route::get('games/create', [GameController::class, 'create'])->name('games.create');
Route::post('games', [GameController::class, 'store'])->name('games.store');
Route::get('games/{id}', [GameController::class, 'show'])->name('games.show');
Route::get('games/{game}/edit', [gameController::class, 'edit'])->name('games.edit');
Route::put('games/{game}', [GameController::class, 'update'])->name('games.update');
Route::delete('games/{game}', [GameController::class, 'destroy'])->name('games.destroy');


//--------------------------- Routes TEAMS ---------------------------------
Route::get('teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('teams/create', [TeamController::class, 'create'])->name('teams.create');
Route::post('teams', [TeamController::class, 'store'])->name('teams.store');
Route::get('teams/{id}', [TeamController::class, 'show'])->name('teams.show');
Route::get('teams/{team}/edit', [TeamController::class, 'edit'])->name('teams.edit');
Route::put('teams/{team}', [TeamController::class, 'update'])->name('teams.update');
Route::delete('teams/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');
