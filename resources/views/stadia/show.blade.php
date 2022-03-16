@extends('layouts.plantilla')

@section('title', 'Stadium ' . $stadium->name)

@section('content')
    <div class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center sm:text-center">
                <h1 class="text-3xl text-lime-700 font-bold tracking-wide uppercase">{{ $stadium->name }}</h1>
            </div>
        </div>
    </div>
    <div class="bg-white px-8 rounded-md w-full text-center">
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="bg-lime-50 min-w-full shadow rounded-lg overflow-hidden">
                <div class="px-4 max-w-3xl mx-auto space-y-4 bg-lime-50 py-2">
                    <p class="text-xl"> Capacitat:<strong> {{ $stadium->capacity }} espectadors</strong></p>
                    <p class="text-xl"> Equip al que pertany:
                        <strong>{{ $stadium->team->name ?? '(sense equip asignat)' }}</strong></p>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-center">
            <div class="m-4">
                <button
                    class="px-6 py-2 justify-center items-center rounded-md text-lg font-semibold text-lime-100 bg-lime-700 flex">
                    <a href={{ route('stadia.index') }}>Tornar a Estadis</a>
                </button>
            </div>
            <div class="m-4">
                <button
                    class="px-6 py-2 justify-center items-center rounded-md text-lg font-semibold text-lime-100 bg-lime-700 flex">
                    <a href={{ route('stadia.edit', $stadium) }}>Editar Estadi</a>
                </button>
            </div>
        </div>
    </div>


@endsection
