@extends('layouts.plantilla')

@section('title', 'Games')

@section('content')

    <div class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center sm:text-center">
                <h1 class="text-3xl text-lime-700 font-bold tracking-wide uppercase">
                    Pàgina de Partits
                </h1>
            </div>
        </div>
    </div>
    <div>
        <a href="{{ route('games.create') }}"><button
                class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-white bg-lime-700">
                Crear Partit
            </button></a>
    </div>
    <div class="bg-white p-8 rounded-md w-full">
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal table-fixed">
                    <thead>
                        <tr>
                            <th
                                class="w-1/6 px-5 py-3 border-b-2 border-gray-200 bg-lime-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Dia i Hora
                            </th>
                            <th
                                class="w-1/4 px-5 py-3 border-b-2 border-gray-200 bg-lime-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Equip Local
                            </th>
                            <th
                                class="w-1/4 px-5 py-3 border-b-2 border-gray-200 bg-lime-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Equip Visitant
                            </th>
                            <th
                                class="w-1/4 px-5 py-3 border-b-2 border-gray-200 bg-lime-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Estadi
                            </th>
                            <th
                                class="w-8 px-5 py-3 border-b-2 border-gray-200 bg-lime-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Gols Local
                            </th>
                            <th
                                class="w-8 px-5 py-3 border-b-2 border-gray-200 bg-lime-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Gols Visitant
                            </th>
                            <th
                                class="w-8 px-5 py-3 border-b-2 border-gray-200 bg-lime-50 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Editar
                            </th>
                    </thead>

                    <tbody>
                        @foreach ($games as $game)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <a href="{{ route('games.show', $game->id) }}">{{ $game->date }}</a>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <a href="{{ route('games.show', $game->id) }}">{{ $game->teamL->name }}</a>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <a href={{ route('games.show', $game->id) }}>{{ $game->teamV->name }} </a>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <a href={{ route('games.show', $game->id) }}>{{ $game->stadium->name }} </a>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <a href="{{ route('games.show', $game->id) }}">{{ $game->goals_local }}</a>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <a href="{{ route('games.show', $game->id) }}">{{ $game->goals_visitor }}</a>
                                    </p>
                                </td>
                                <td class="px-7 py-5 border-b border-gray-200 bg-white text-sm">
                                    <button class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold">
                                        <a href={{ route('games.edit', $game) }}>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
