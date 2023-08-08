<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>El Bambino</title>

        @vite('resources/css/app.css')
	    @vite('resources/js/app.js')
        
    </head>
<div class="flex justify-center gap-10 items-start">
    
    <div class="w-4/12 bg-white p-6 rounded-lg shadow-xl border border-green-200 mt-6">
        <div class="flex justify-center mt-6 mb-6">
            <img src="{{ asset('icons/usuarioIcon.png') }}" alt="Productos el Bambino" class="w-44 border-4 border-black  rounded-full">
        </div>
        <form method="POST" action="{{route('user.loginUser')}}" novalidate>
            @csrf
            <div class="mb-5">
                <label for="username">Ingrese su Nombre de Usuario</label>
                <input 
                    type = "text"
                    name = "username"
                    id = "username"
                    placeholder="Ingrese su Nombre de Usuario"
                    class="border p-3 w-full rounded border-green-200"
                    required
                >
            </div>

            <div class="mb-5">
                <label for="password">Ingrese su Contraseña</label>
                <input 
                    type = "password"
                    name = "password"
                    id = "password"
                    placeholder="Ingrese su Contraseña"
                    class="border p-3 w-full rounded border-green-200"
                    required
                >
            </div>

            <div class="mb-5">
                <label for="rpassword">Confirme su Contraseña</label>
                <input 
                    type = "password"
                    name = "rpassword"
                    id = "password"
                    placeholder="Confirme su Contraseña"
                    class="border p-3 w-full rounded border-green-200"
                    required
                >
            </div>

            <div class="mb-5">
                <input type="checkbox" name="remember">
                <label class="text-sm text-gray-500">Mantener Sesion Abierta</label>
            </div>

            <input 
                type="submit"
                value="Iniciar Sesion"
                class="bg-green-500 hover:bg-green-600 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                >
        </form>
    </div>

    </div>
</html>