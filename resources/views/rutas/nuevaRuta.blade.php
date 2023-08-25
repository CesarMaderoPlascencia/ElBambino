@extends('layouts.app')

@section('titulo')
    Sellers
@endsection

@section('contenido')
@if(session('mensaje'))
    <div class="bg-green-400 p-2 rounded-lg mb-6 text-white text-center uppercase font-bold mx-2 mt-2">
        {{ session('mensaje') }}
    </div>
@endif
@if(session('mensajeError'))
    <div class="bg-red-400 p-2 rounded-lg mb-6 text-white text-center uppercase font-bold mx-2 mt-2">
        {{ session('mensajeError') }}
    </div>
@endif
<div class="flex flex-col justify-center ">
<form method="POST" action="{{ route('rutas.ingresar') }}">
    @csrf
   <div class="flex flex-col justify-center gap-10 items-center">
        <div class="flex flex-col justify-center items-center w-4/6 border-2 border-green-500 mt-12 bg-white shadow-lg rounded-lg">
            
            <div class="font-bold text-3xl mt-4">Agregar Nuevo Bambino</div>
        
            <div class="grid grid-cols-2 mb-6 mt-6 gap-x-12 gap-y-6">
                <div class="flex flex-col justify-start items-star">
                    <label for="nombreRuta" class="font-bold">Nombre de la Ruta</label>
                    <input type="text" name="nombreRuta" list="nombreRutas" id="nombreRuta" 
                    class="border-2 border-green-400 rounded-lg h-10 w-64 px-2" required>
                    <datalist id="nombreRutas">
                        @foreach ($rutas as $ruta)
                            <option value="{{ $ruta->nombre }}"></option>
                        @endforeach
                        <!-- Agrega más opciones según sea necesario -->
                    </datalist>
                </div>

                <div class="flex flex-col justify-start items-star">
                    <label for="semana" class="font-bold">Semana</label>
                    <select name="semana" id="semana" class="border-2 border-green-400 rounded-lg h-10 w-64 px-2" required>
                        <option value="Ruta Sin Semana">Ruta Sin Semana</option>
                        <option value="Semana 1">Semana 1</option>
                        <option value="Semana 2">Semana 2</option>
                    </select>
                </div>

                <div class="flex flex-col justify-start items-star">
                    <label for="dia" class="font-bold">Dia</label>
                    <select name="dia" id="dia" class="border-2 border-green-400 rounded-lg h-10 w-64 px-2" required>
                        <option value="Ruta Sin Dia">Ruta Sin Dia</option>
                        <option value="Lunes">Lunes</option>
                        <option value="Martes">Martes</option>
                        <option value="Miercoles">Miercoles</option>
                        <option value="Jueves">Jueves</option>
                        <option value="Viernes">Viernes</option>
                        <option value="Sabado">Sabado</option>
                        <option value="Domingo">Domingo</option>
                    </select>
                </div>

                <div class="flex flex-col justify-start items-star">
                    <label for="vendedor" class="font-bold">Vendedor</label>
                    <select name="vendedor" id="vendedor" class="border-2 border-green-400 rounded-lg h-10 w-64 px-2" required>
                        @foreach ($vendedores as $vendedor)
                            <option value="{{ $vendedor->id }}">{{ $vendedor->data->nombre }} {{$vendedor->data->paterno  }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <button type="submit" 
                class="flex flex-col items-center border-2 text-white border-white rounded-lg bg-gray-600 hover:bg-gray-800 mb-6 px-12 py-2 font-bold text-3xl">
                Agregar Ruta
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                    <path fill="currentColor" d="M26.87 14.28a22.36 22.36 0 0 0-7.22-7.38a9.64 9.64 0 0 0-9-.7a8.6 8.6 0 0 
                    0-4.82 6.4c-.08.49-.15 1-.21 1.4h-1A2.59 2.59 0 0 0 2 16.59v8.55a.86.86 0 0 0 .86.86h1.73v-.39a5.77 5.77 
                    0 0 1 7.71-5.45l-1 1a4.56 4.56 0 0 0-4.34 1.58a3 3 0 0 0-.63.93A4.5 4.5 0 1 0 14.82 26h5.48v-.39a5.77 5.77 
                    0 0 1 7.7-5.45l-1 1a4.56 4.56 0 0 0-4.34 1.58a3 3 0 0 0-.63.93a4.5 4.5 0 1 0 8.5 2.33h2.61a.86.86 0 0 0 
                    .86-.86v-1.78a9.39 9.39 0 0 0-7.13-9.08ZM12 14H8c0-.35.1-.71.16-1.07a6.52 6.52 0 0 1 3.87-5Zm-1.64 14.36a2.5 
                    2.5 0 1 1 2.5-2.5a2.5 2.5 0 0 1-2.5 2.5ZM19 19h-3v-2h3Zm-6-5V7.47a8.16 8.16 0 0 1 5.4 1.15A19.15 19.15 0 0 1 
                    24 14Zm13.06 14.36a2.5 2.5 0 1 1 2.5-2.5a2.5 2.5 0 0 1-2.5 2.5Z" class="clr-i-solid clr-i-solid-path-1"/>
                    <path fill="none" d="M0 0h36v36H0z"/></svg>
            </button>
        </div>
   </div>
</form>

<div class="flex justify-center items-center mt-8 mb-12">
<table id="miTabla" class="shadow-xl w-4/6 border-2 border-black">
    <thead>
        <tr class="bg-black text-white">
            <th class="px-2 py-1 text-left">Nombre</th>
            <th class="px-2 py-1 text-left">Semana</th>
            <th class="px-2 py-1 text-left">Dia</th>
            <th class="px-2 py-1 text-left">Vendedor</th>
            <!-- Agrega más columnas según tus necesidades -->
        </tr>
    </thead>
    <tbody>
        <!-- Aquí irán los datos de la tabla -->
        @foreach ($rutas as $ruta)
            <tr class="border border-black py-2 bg-gray-100 transition duration-300 ease-in-out hover:bg-green-100 hover:cursor-pointer">
                <td class="px-2 py-1"> {{$ruta->nombre}} </td>
                <td class="px-2 py-1">{{ $ruta->semana }}</td>
                <td class="px-2 py-1">{{ $ruta->dia }}</td>
                <td class="px-2 py-1">
                    {{ $ruta->vendedor->data->nombre }} 
                    {{ $ruta->vendedor->data->paterno }}
                    {{ $ruta->vendedor->data->materno }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>

@endsection