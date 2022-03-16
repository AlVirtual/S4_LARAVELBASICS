@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    <div class="mx-auto container py-20 px-6">
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6">
            @foreach ($teams as $team)
                <div
                    class="w-full h-64 flex flex-col justify-between bg-lime-100 rounded-lg mb-6 py-5 px-4 hover:scale-105 transition duration-700 hover:shadow-2xl shadow-black">
                    <div class="text-center ">
                        <h1 class="text-gray-800 text-3xl font-bold mb-3 self-center py-12">{{ $team->name }}</h1>
                        <p class="text-gray-800  text-sm"></p>
                    </div>
                    <div>
                        <div class="flex items-center justify-end ">
                            <button> <a href="{{ route('teams.show', $team->id) }}">
                                    verue equip</a>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
