<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class HomeController extends Controller
{
    public function __invoke(){
        $teams = Team::all();
        return view('home', compact('teams'));
    }


}
