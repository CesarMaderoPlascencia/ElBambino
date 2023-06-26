<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>El Bambino - @yield('titulo')</title>

        @vite('resources/css/app.css')
	    @vite('resources/js/app.js')
        
    </head>
    <body class="bg-gray-100">
        <header class="border-b-2 border-green-200 h-24 bg-gradient-to-br from-gray-700 to-green-300 shadow-lg">
            <div class="container mx-auto flex justify-between items-center">
                <div class="flex items-center">
                    <img src="{{ asset('img/rana.png') }}" alt="Productos el Bambino" class="w-20 pt-2">
                    <h1 class="text-4xl font-black font-serif italic text-white uppercase"> Productos el Bambino</h1>
                    
                </div>
                @auth
                    <div class="flex justify-end items-center">
                        <p class="font-bold text-xl">Bienvenido - {{Auth::user()->username}}</p>

                        <form action="{{route('user.logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-blue-600 ml-4">Salir</button>
                        </form>
                    </div>
                @endauth
            </div>
            
        </header>
        @yield('contenido')
    </body>
</html>