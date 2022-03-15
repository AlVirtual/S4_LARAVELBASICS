
@extends('layouts.plantilla')

@section('title','Home')
    
@section('content')
    <h1></h1>

    

    <div class="mx-auto container py-20 px-6">
        
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6">
         @foreach ($teams as $team)   
            <div
                class="w-full h-64 flex flex-col justify-between bg-lime-100 rounded-lg mb-6 py-5 px-4 hover:scale-105 transition duration-700 hover:shadow-2xl shadow-black">
                <div>
                    <p class="text-sm">{{$team->name}}Inici 12:00 / Final 13:00</p>
                    <h4 class="text-gray-800  font-bold mb-3">{{$team->name}}</h4>
                    <p class="text-gray-800  text-sm"></p>
                </div>
                <div>
                    <div class="flex items-center justify-end ">
                        <button>

                        verue equip
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    
    </div>
    
    @endsection

