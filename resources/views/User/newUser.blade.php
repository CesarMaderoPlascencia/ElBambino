@extends('layouts.app')

@section('titulo')
    Sellers
@endsection

@section('contenido')
<form method="POST" action="{{ route('user.ingresar') }}">
    @csrf
   <div class="flex flex-col justify-center gap-10 items-center">
        <div class="flex flex-col justify-center items-center w-4/6 border-2 border-green-500 mt-12 bg-white shadow-lg rounded-lg">
            
            <div class="font-bold text-3xl mt-4">Agregar Nuevo Bambino</div>
        
            <div class="grid grid-cols-3 mb-6 mt-6 gap-x-12 gap-y-6">
                <div class="flex flex-col justify-start items-star">
                    <label for="username" class="font-bold">Nombre de Usuario</label>
                    <input type="text" name="username" id="username" placeholder="Nombre de Usuario"
                            class="border-2 border-green-400 rounded-lg h-10 w-64 px-2" required>
                </div>

                <div class="flex flex-col justify-start items-star">
                    <label for="email" class="font-bold">Correo electronico</label>
                    <input type="email" name="email" id="email" placeholder="Correo electrónico"
                            class="border-2 border-green-400 rounded-lg h-10 w-64 px-2">
                </div>

                <div class="flex flex-col justify-start items-star">
                    <label for="password" class="font-bold">Contraseña</label>
                    <input type="text" name="password" id="password" placeholder="Contraseña"
                            class="border-2 border-green-400 rounded-lg h-10 w-64 px-2" required>
                </div>

                <div class="flex flex-col justify-start items-star">
                    <label for="name" class="font-bold">Nombre/s</label>
                    <input type="text" name="name" id="name" placeholder="Nombre/s"
                            class="border-2 border-green-400 rounded-lg h-10 w-64 px-2" required>
                </div>

                <div class="flex flex-col justify-start items-star">
                    <label for="paterno" class="font-bold">Apellido Paterno</label>
                    <input type="text" name="paterno" id="paterno" placeholder="Apellido Paterno"
                            class="border-2 border-green-400 rounded-lg h-10 w-64 px-2" required>
                </div>

                <div class="flex flex-col justify-start items-star">
                    <label for="materno" class="font-bold">Apellido Materno</label>
                    <input type="text" name="materno" id="materno" placeholder="Apellido Materno"
                            class="border-2 border-green-400 rounded-lg h-10 w-64 px-2" required>
                </div>

                <div class="flex flex-col justify-start items-star">
                    <label for="birthdate" class="font-bold">Fecha de Nacimiento</label>
                    <input type="date" name="birthdate" id="birthdate" 
                            class="border-2 border-green-400 rounded-lg h-10 w-64 px-2" required>
                </div>

                <div class="flex flex-col justify-start items-star col-span-2">
                    <label for="address" class="font-bold">Direccion</label>
                    <input type="text" name="address" id="address" placeholder="Direccion"
                            class="border-2 border-green-400 rounded-lg h-10 w-full px-2" required>
                </div>

                <div class="flex flex-col justify-start items-star">
                    <label for="tel" class="font-bold">Telefono</label>
                    <input type="tel" name="tel" id="tel" placeholder="Telefono"
                            class="border-2 border-green-400 rounded-lg h-10 w-64 px-2" required>
                </div>

                <div class="flex flex-col justify-start items-star">
                    <label for="admission" class="font-bold">Fecha de Admision</label>
                    <input type="date" name="admission" id="admission" 
                            class="border-2 border-green-400 rounded-lg h-10 w-64 px-2" required>
                </div>

                <div class="flex flex-col justify-start items-star">
                    <label for="puesto" class="font-bold">Puesto</label>
                    <select name="puesto" id="puesto" 
                            class="border-2 border-green-400 rounded-lg h-10 w-64 px-2" required>
                            @foreach ($roles as $rol)
                                <option value="{{ $rol->name }}">{{ $rol->name }}</option>
                            @endforeach
                            
                    </select>
                </div>

            </div>
            <button type="submit" 
                class="flex flex-col items-center border-2 text-white border-white rounded-lg bg-gray-600 hover:bg-gray-800 mb-6 px-12 py-2 font-bold text-3xl">
                Agregar Bambino
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <path fill="currentColor" d="M21 7a3.004 3.004 0 0 0-2.625 1.563c-.34.199-1.023.632-1.781 
                    1.468c-.934.016-2.676.086-4.657.719c-2.117.676-4.386 2.047-5.656 
                    4.563c-.011.027-.05.035-.062.062c-.051.055-.535.555-1.063 1.344C4.606 17.547 4 18.633 4 
                    19.906c0 .918.32 1.84 1 2.5c.223.219.512.371.813.5c-.118.157-.243.309-.344.469c-.23.36-.469.613-.469 
                    1.281c0 .418.305.817.531.969c.227.152.387.21.563.25c.347.078.71.086 1.125.094c.832.011 1.914-.035 
                    3.125-.094c2.426-.117 5.39-.223 7.5.125l.312-2c-1-.164-2.11-.23-3.218-.25c.613-.652 1.062-1.469 
                    1.062-2.469c0-1.597-1.031-2.808-2.219-3.437C12.594 17.214 11.215 17 10 17v2c.941 0 2.07.215 
                    2.844.625c.773.41 1.156.848 1.156 1.656c0 .653-.531 1.27-1.406 
                    1.782c-.875.511-2.043.78-2.406.78v.032c-1.083.05-2.004.094-2.688.094c.105-.14.2-.266.313-.407c.492-.605 
                    1-1.125 1-1.125l-1.47-1.375l-.03.063c-.504.148-.723.05-.938-.156C6.16 20.762 6 20.336 6 
                    19.906c0-.531.395-1.386.844-2.062c.449-.676.875-1.157.875-1.157l.125-.125l.062-.156c.93-2.062 
                    2.774-3.148 4.657-3.75C14.444 12.055 16.305 12 17 12h.5l.313-.406c.136-.188.285-.32.437-.469C18.703 
                    12.215 19.758 13 21 13c1.59 0 2.883-1.273 2.969-2.844c.457.114.91.266 
                    1.281.469c.32.176.578.371.719.5c-.008.04-.016.02-.032.063c-.066.183-.203.398-.375.656c-.347.511-.921
                    1.101-1.937 1.5l-.625.25v.687c0 1.403-.125 4.852-2.063 6.219l1.157 1.625c2.808-1.984 2.843-5.563 
                    2.843-7.25c1.043-.54 1.82-1.227 2.282-1.906c.273-.406.472-.785.593-1.125c.122-.34.188-.61.188-.938c0-.773-.383-.969-.688-1.25a5.64 5.64 0 0 0-1.125-.781c-.812-.441-1.835-.793-2.937-.844A2.99 
                    2.99 0 0 0 21 7zm0 2c.563 0 1 .438 1 1c0 .563-.438 1-1 1c-.563 0-1-.438-1-1c0-.563.438-1 1-1zm-2 7.375a6.33 6.33 0 0 
                    0-1.094 2.688c-.12.777-.09 1.496-.093 1.53v.032c0 .262.046.297.062.344l.031.093c.024.063.063.122.094.188c.059.129.125.281.219.469c.191.375.46.867.75 
                    1.375c.582 1.011 1.164 2.058 1.937 2.718c.117.106.254.18.407.22c.46.105.664-.016.875-.063c.21-.047.417-.086.656-.125c.472-.074 1.054-.106 
                    1.875.125l.562-1.938a6.426 6.426 0 0 0-2.75-.156c-.242.04-.402.09-.562.125c-.278-.328-.809-1.082-1.282-1.906a28.151 28.151 
                    0 0 1-.875-1.657c-.003-.007.004-.027 0-.03c.004-.313-.003-.598.063-1.032c.086-.55.29-1.191.75-1.844z"/></svg>
            </button>
        </div>
   </div>
</form>

   <script>
        const currentDate = new Date().toISOString().split('T')[0];
        document.getElementById('admission').value = currentDate;
  </script>
@endsection