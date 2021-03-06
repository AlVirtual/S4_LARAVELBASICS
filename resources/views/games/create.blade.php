@extends('layouts.plantilla')

@section('title', 'Games Create')

@section('content')

    <div class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center sm:text-center">
                <h1 class="text-3xl text-lime-700 font-bold tracking-wide uppercase">
                    Crea un partit
                </h1>
            </div>
        </div>
    </div>
    <div class="bg-white px-8 rounded-md w-full">
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="bg-lime-50 min-w-full shadow rounded-lg overflow-hidden">
                <form action="{{ route('games.store') }}" method="POST">

                    @csrf {{-- genera token --}}
                    <div class="px-4 max-w-3xl mx-auto space-y-4 bg-lime-50 py-2">
                        <div class="w-1/8">
                            <label for="">
                                Data
                            </label>
                            <br>
                            <input type="datetime-local" name="date"
                                class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-lime-500 focus:border-lime-500 sm:text-sm">
                        </div>
                        <div class="w-1/8">
                            <label for="">
                                Equip Local
                            </label>
                            <br>
                            <select name="teamL"
                                class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-lime-500 focus:border-lime-500 sm:text-sm">
                                @foreach ($teams as $team)
                                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-1/8">
                            <label for="">
                                Equip Visitant
                            </label>
                            <br>
                            <select name="teamV"
                                class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-lime-500 focus:border-lime-500 sm:text-sm">
                                @foreach ($teams as $team)
                                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-1/8">
                            <label for="">
                                Estadi
                            </label>
                            <br>
                            <select name="stadium"
                                class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-lime-500 focus:border-lime-500 sm:text-sm">
                                @foreach ($stadia as $stadium)
                                    <option value="{{ $stadium->id }}">{{ $stadium->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <br>
                            <button type="submit"
                                class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-lime-100 bg-lime-700">
                                Guardar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
