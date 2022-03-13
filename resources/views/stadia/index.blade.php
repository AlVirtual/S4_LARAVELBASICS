
@extends('layouts.plantilla')

@section('title','Stadia')
    
@section('content')
    <h1>Pagina principal de stadia</h1>
    <a href="{{ route('stadia.create') }}">Crear Estadio</a>
    <ul>
        @foreach ($stadia as $stadium)
            <li>
                <a href="{{ route('stadia.show', $stadium->id) }}">{{$stadium->name}}</a>
            </li>
        @endforeach
    </ul>

<div class="bg-white p-8 rounded-md w-full">
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
      <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal table-fixed">
          <thead>
            <tr>

              <th
                class="w-1/2 px-5 py-3 border-b-2 border-gray-200 bg-indigo-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Tasca
              </th>
              <th
                class="w-1/2 px-5 py-3 border-b-2 border-gray-200 bg-indigo-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Descripció
              </th>
              <th
                class="w-1/2 px-5 py-3 border-b-2 border-gray-200 bg-indigo-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Estat
              </th>
              <th
                class="w-1/2 px-5 py-3 border-b-2 border-gray-200 bg-indigo-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Editar
              </th>
              <th
                class="w-1/2 px-5 py-3 border-b-2 border-gray-200 bg-indigo-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Esborrar
              </th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">                    
                    <?php echo @$tasca['taskName'];?>
                </p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">                    
                    <?php echo @$tasca['taskDescription'];?>
                </p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                  <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                  <span class="relative"><?php echo @$tasca['taskStatus'];?></span>
                </span>
              </td>          

              <td class="px-7 py-5 border-b border-gray-200 bg-white text-sm">
              <form method="post" action="../controllers/c_control.php">              
                  <input type="hidden" id="accio" name="accio" value="modificar">
                  <input type="hidden" id="id" name="id" value="<?php echo @$tasca['idTask'];?>">
                  <button
                                type="submit"
                                class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600"
                              >
                                Modificar
                  </button>
              </form>   
              </td>
              <td class="px-7 py-5 border-b border-gray-200 bg-white text-sm ">
              <form method="post" action="../controllers/c_control.php">              
                  <input type="hidden" id="accio" name="accio" value="esborrar">
                  <input type="hidden" id="id" name="id" value="<?php echo @$tasca['idTask'];?>">
                  <button
                                type="submit"
                                class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600"
                              >
                                Esborrar
                  </button>
              </form>
              </td>
            </tr>       
          </tbody>
        </table>
      </div>
    </div>
  </div>

  @endsection