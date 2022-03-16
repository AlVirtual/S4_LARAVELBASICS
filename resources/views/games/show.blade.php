@extends('layouts.plantilla')

@section('title', 'Game ' . $game->id)

@section('content')

    <div class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center sm:text-center">
                <h1 class="text-3xl text-lime-700 font-bold tracking-wide uppercase">{{ $game->teamL->name }} vs
                    {{ $game->teamV->name }}</h1>
            </div>
        </div>
    </div>
    <div class="bg-white px-8 rounded-md w-full text-center">
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="bg-lime-50 min-w-full shadow rounded-lg overflow-hidden">
                <div class="px-4 max-w-3xl mx-auto space-y-4 bg-lime-50 py-2">
                    <p class="text-xl"> Data <strong> {{ $game->date }}</strong></p>
                    <p class="text-xl"><strong> {{ $game->teamL->name }} {{ $game->goals_local }}</strong></p>
                    <p class="text-xl"><strong> {{ $game->teamV->name }} {{ $game->goals_visitor }}</strong></p>
                    <p class="text-xl"> Estadi: <strong>{{ $game->stadium->name }}</strong></p>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-center">
            <div class="m-4">
                <button
                    class="px-6 py-2 justify-center items-center rounded-md text-lg font-semibold text-lime-100 bg-lime-700 flex">
                    <a href={{ route('games.index') }}>Tornar a Partits</a>
                </button>
            </div>
            <div class="m-4">
                <button
                    class="px-6 py-2 justify-center items-center rounded-md text-lg font-semibold text-lime-100 bg-lime-700 flex">
                    <a href={{ route('games.edit', $game) }}>Editar Partit</a>
                </button>
            </div>
        </div>
    </div>

@endsection
