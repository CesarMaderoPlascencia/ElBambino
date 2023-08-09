@extends('layouts.app')

@section('titulo')
    Sellers
@endsection

@section('contenido')

    <div class="flex flex-col justify-center gap-10 items-center">
        <div class="flex flex-col justify-center items-center w-8/12 bg-gradient-to-br from-gray-300 to-green-100 p-6 rounded-lg shadow-2xl border-2 border-green-500 mt-6">
            <h1 class="font-bold text-2xl mb-8"> Usuarios </h1>

            <table id="miTabla" class="shadow-xl border-2 border-black">
                <thead>
                    <tr class="bg-black text-white">
                        <th class="px-2 py-1">Nombre</th>
                        <th class="px-2 py-1">Puesto</th>
                        <th class="px-2 py-1">Telefono</th>
                        <th class="px-2 py-1">Fecha de Ingreso</th>
                        <!-- Agrega más columnas según tus necesidades -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí irán los datos de la tabla -->
                    @foreach ($usuarios as $user)
                        <tr class="border border-black py-2 bg-gray-100 transition duration-300 ease-in-out hover:bg-green-100 hover:cursor-pointer">
                            <td class="px-2 py-1">
                                {{$user->data->nombre}} {{$user->data->materno}} {{$user->data->paterno}} 
                            </td>
                            <td class="px-2 py-1">{{ $user->data->puesto }}</td>
                            <td class="px-2 py-1">{{ $user->data->telefono }}</td>
                            <td class="px-2 py-1">{{ $user->data->fecha_ingreso }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection



