
@extends('layouts.plantilla')

@section('title','Player Edit')
    
@section('content')
    <div class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center sm:text-center">
            <h1 class="text-3xl text-lime-600 font-bold tracking-wide uppercase">
                Edita el jugador : {{$player->name}}  {{$player->surname}}
            </h1>
          </div>
        </div>
    </div>
    <div class="bg-white px-8 rounded-md w-full">
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="bg-lime-50 min-w-full shadow rounded-lg overflow-hidden">
                <form action="{{ route('players.update', $player) }}" method="POST">

                    @csrf   {{-- genera token --}}
                    @method('put') {{-- deriva a tuta put --}}

                    <div class="px-4 max-w-3xl mx-auto space-y-4 bg-lime-50 py-2">
                        <div class="w-1/8">
                            <label for="">
                                Nom del Jugador:
                            </label>
                            <br>
                            <input type="text" name="name" value="{{$player->name}}" class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-lime-500 focus:border-lime-500 sm:text-sm">   
                        </div>
                        <div class="w-1/8">
                            <label for="">
                                Cognom del Jugador:
                            </label>
                            <br>
                            <input type="text" name="surname" value="{{$player->surname}}" class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-lime-500 focus:border-lime-500 sm:text-sm">   
                        </div>
                        <div class="w-1/6">
                            <label for="">
                                Edat:
                            </label>
                            <br>
                            <input type="number" name="age" value="{{$player->age}}" class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-lime-500 focus:border-lime-500 sm:text-sm">   
                        </div>
                        <div class="w-1/8">    
                            <label for="">
                                Equip al que pertany:
                            </label>   
                            <br>
                            <select name="player" class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-lime-500 focus:border-lime-500 sm:text-sm">
                                  @foreach ($teams as $team)
                                <option value="{{$team->id}}" {{ $team->id==$player->team_id ? 'selected' : '' }}>{{$team->name}}</option>
                                 @endforeach 
                            </select>
                        </div>
                        <div>
                            <br>
                            <button type="submit" class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-lime-100 bg-lime-600">
                                Guardar
                            </button>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


