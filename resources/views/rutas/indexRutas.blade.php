@extends('layouts.app')

@section('titulo')
    Rutas
@endsection

@section('contenido')
   <div class="flex flex-col justify-center gap-10 items-center">
        <div class="grid grid-cols-1 md:grid-cols-3 w-8/12 bg-gradient-to-br from-gray-300 to-green-100 p-6 rounded-lg shadow-2xl border-2 border-green-500 mt-6">

          <!--Rutas-->
          <a href="{{ route('rutas.nuevo') }}" class="w-56 h-56 bg-white rounded-xl border-2 border-green-400 hover:border-green-600 hover:bg-green-100 hover:transition flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl relative">
            <img src="{{ asset('icons/rutasIcon.png') }}" alt="Productos el Bambino" class=" w-44 pb-12"> <!-- Ajuste realizado aquí, se cambió pt-2 por pt-4 -->
            <p class="uppercase font-bold text-2xl absolute bottom-7 left-1/2 transform -translate-x-1/2">Rutas</p>
          </a>

          <!--Clientes-->
          <a href="{{ route('rutas.clientes') }}" class="w-56 h-56 bg-white rounded-xl border-2 border-green-400 hover:border-green-600 hover:bg-green-100 hover:transition flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl relative">
            <img src="{{ asset('icons/clientesIcon.png') }}" alt="Productos el Bambino" class=" w-36 pb-12"> <!-- Ajuste realizado aquí, se cambió pt-2 por pt-4 -->
            <p class="uppercase font-bold text-2xl absolute bottom-7 left-1/2 transform -translate-x-1/2">Clientes</p>
          </a>

        </div>
   </div>
@endsection