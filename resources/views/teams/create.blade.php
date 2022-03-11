
@extends('layouts.plantilla')

@section('title', 'Team Create')
    
@section('content')
    <h1>Aquí puedes crear un Team</h1>
    <form action="{{ route('teams.store') }}" method="POST">

        @csrf   {{-- genera token --}}

        <label for="">Nombre:</label>
        <br>
            <input type="text" name="name">
        <br>

        <label for="">Campo:</label>
        <br>
            <select name="stadium">
                @foreach ($stadia as $stadium)
                    <option value="{{$stadium['id']}}">{{$stadium['name']}}</option>
                @endforeach
            </select>
            @error('stadium')
                <br>
                <small>*{{$message}}</small>
            @enderror
        <br>

        <button type="submit">Guardar</button>
    </form>
@endsection