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
Route::get('stadia', [StadiumController::class, 'index']);
Route::get('stadia/create', [StadiumController::class, 'create']);
Route::get('stadia/{stadium}', [StadiumController::class, 'show']);


//--------------------------- Routes PLAYERS ---------------------------------
Route::get('players', [PlayerController::class, 'index']); 
Route::get('players/create', [PlayerController::class, 'create']);
Route::get('players/{player}', [PlayerController::class, 'show']);
    

//--------------------------- Routes GAMES ---------------------------------
Route::get('games', [GameController::class, 'index']);
Route::get('games/create', [GameController::class, 'create']);
Route::get('games/{game}', [GameController::class, 'show']);


//--------------------------- Routes TEAMS ---------------------------------
Route::get('teams', [TeamController::class, 'index']);
Route::get('teams/create', [TeamController::class, 'create']);
Route::get('teams/{team}', [TeamController::class, 'show']);


