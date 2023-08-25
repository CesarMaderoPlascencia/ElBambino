@extends('layouts.app')

@section('titulo')
    Rutas
@endsection

@section('contenido')
   <body>
        @livewire('rutas-clientes')
        @livewireScripts
   </body>
@endsection