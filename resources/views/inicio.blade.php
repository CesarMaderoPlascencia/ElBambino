@extends('layouts.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')
   <div class="flex flex-col justify-center gap-10 items-center">
        <div class="grid grid-cols-1 md:grid-cols-3 w-8/12 bg-gradient-to-br from-gray-300 to-green-100 p-6 rounded-lg shadow-2xl border-2 border-green-500 mt-6">
          
          <!--Usuarios-->
          <a href="{{ route('user.index') }}" class="w-56 h-56 bg-white rounded-xl border-2 border-green-400 hover:border-green-600 hover:bg-green-100 hover:transition flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl relative">
            <img src="{{ asset('icons/usuarioIcon.png') }}" alt="Productos el Bambino" class=" w-28 pb-12"> <!-- Ajuste realizado aquí, se cambió pt-2 por pt-4 -->
            <p class="uppercase font-bold text-2xl absolute bottom-7 left-1/2 transform -translate-x-1/2">Usuarios</p>
          </a>

          <!--Rutas-->
          <a href="{{ route('rutas.index') }}" class="w-56 h-56 bg-white rounded-xl border-2 border-green-400 hover:border-green-600 hover:bg-green-100 hover:transition flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl relative">
            <img src="{{ asset('icons/rutasIcon.png') }}" alt="Productos el Bambino" class=" w-44 pb-12"> <!-- Ajuste realizado aquí, se cambió pt-2 por pt-4 -->
            <p class="uppercase font-bold text-2xl absolute bottom-7 left-1/2 transform -translate-x-1/2">Rutas</p>
          </a>

          <!--Ventas-->
          <a href="" class="w-56 h-56 bg-white rounded-xl border-2 border-green-400 hover:border-green-600 hover:bg-green-100 hover:transition flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl relative">
            <img src="{{ asset('icons/ventasIcon.png') }}" alt="Productos el Bambino" class=" w-40 pb-12"> <!-- Ajuste realizado aquí, se cambió pt-2 por pt-4 -->
            <p class="uppercase font-bold text-2xl absolute bottom-7 left-1/2 transform -translate-x-1/2">Ventas</p>
          </a>

          <!--Mapas-->
          <a href="" class="w-56 h-56 bg-white rounded-xl border-2 border-green-400 hover:border-green-600 hover:bg-green-100 hover:transition flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl relative">
            <img src="{{ asset('icons/mapaIcon.png') }}" alt="Productos el Bambino" class=" w-44 pb-12"> <!-- Ajuste realizado aquí, se cambió pt-2 por pt-4 -->
            <p class="uppercase font-bold text-2xl absolute bottom-7 left-1/2 transform -translate-x-1/2">Mapas</p>
          </a>

          <!--Estadisticas-->
          <a href="" class="w-56 h-56 bg-white rounded-xl border-2 border-green-400 hover:border-green-600 hover:bg-green-100 hover:transition flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl relative">
            <img src="{{ asset('icons/estadisticasIcon.png') }}" alt="Productos el Bambino" class=" w-44 pb-12"> <!-- Ajuste realizado aquí, se cambió pt-2 por pt-4 -->
            <p class="uppercase font-bold text-2xl absolute bottom-7 left-1/2 transform -translate-x-1/2">Estadisticas</p>
          </a>

          <!--Calendario-->
          <a href="" class="w-56 h-56 bg-white rounded-xl border-2 border-green-400 hover:border-green-600 hover:bg-green-100 hover:transition flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl relative">
            <img src="{{ asset('icons/calendarioIcon.png') }}" alt="Productos el Bambino" class=" w-36 pb-12"> <!-- Ajuste realizado aquí, se cambió pt-2 por pt-4 -->
            <p class="uppercase font-bold text-2xl absolute bottom-7 left-1/2 transform -translate-x-1/2">Calendario</p>
          </a>

          <!--Vehiculos-->
          <a href="" class="w-56 h-56 bg-white rounded-xl border-2 border-green-400 hover:border-green-600 hover:bg-green-100 hover:transition flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl relative">
            <img src="{{ asset('icons/vehiculosIcon.png') }}" alt="Productos el Bambino" class=" w-36 pb-12"> <!-- Ajuste realizado aquí, se cambió pt-2 por pt-4 -->
            <p class="uppercase font-bold text-2xl absolute bottom-7 left-1/2 transform -translate-x-1/2">Vehiculos</p>
          </a>

        </div>
   </div>
@endsection