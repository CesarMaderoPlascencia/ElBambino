<div class="flex flex-col justify-center gap-10 items-center">
    <div class="flex flex-col justify-center items-center w-11/12 bg-gradient-to-br from-gray-300 to-green-100 p-6 rounded-lg shadow-2xl border-2 border-green-500 mt-6">
        <h1 class="font-bold text-2xl mb-8"> Rutas </h1>
        <div class="flex justify-around w-full mb-8">

            <div class="flex flex-col">
                <label for="nombreRuta" class="font-bold">Ruta</label>
                <select name="nombreRuta" id="nombreRuta" wire:model="nombreRuta" wire:change="cambioNombreRuta()" 
                    class="border-2 border-green-400 rounded-lg h-10 w-64 px-2">
                    <option value="0">Todas</option>
                    @foreach ($rutas as $ruta)
                    <option value="{{ $ruta->nombre }}">{{ $ruta->nombre }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="flex flex-col">
                <label for="semana" class="font-bold">Semana</label>
                <select name="semana" id="semana" wire:model="semana" wire:change="cambioNombreSemana()" 
                    class="border-2 border-green-400 rounded-lg h-10 w-64 px-2" required>
                    <option value="0">SeleccioneRuta</option>
                    @foreach ($semanasNombre as $semanaNombre)
                        <option value="{{ $semanaNombre->semana }}">{{ $semanaNombre->semana }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col">
                <label for="dia" class="font-bold">Dia</label>
                <select name="dia" id="dia" wire:model="dia" wire:change="cerrar()" 
                    class="border-2 border-green-400 rounded-lg h-10 w-64 px-2" required>
                    <option value="0">Seleccione el Dia</option>
                    @foreach ($diasNombre as $diaNombre)
                        <option value="{{ $diaNombre->id }}">{{ $diaNombre->dia }}</option>
                    @endforeach
                </select>
            </div>

            @if ($dia != 0)
                <div class="flex flex-col justify-center items-center">
                    <div class="font-bold">Añadir Cliente</div>
                    <button wire:click="nuevo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 20 20">
                            <path class="fill-current text-green-500 hover:text-green-700" d="M11 9V5H9v4H5v2h4v4h2v-4h4V9h-4zm-1 11a10 10 0 1 1 0-20a10 10 0 0 1 0 20z"/>
                        </svg>
                </button>
                </div>
            @endif
            

        </div>

        @if ($showModal)
            <div class="flex flex-col mb-6 border border-black w-full p-4 pb-5 shadow-2xl rounded-lg bg-gray-200">
                <div class="flex justify-center items-center align-top">
                    <div class=" flex flex-col justify-center">
                        <label for="" class="ml-16 font-bold">Tiras</label>
                        <div class="flex justify-between">
                            <div class="flex flex-col mr-2">
                                <label for="siete" class="font-bold text-center">7</label>
                                <select id="siete" wire:model="siete" class="rounded border border-green-400 hover:border-green-700 w-12 p-1">
                                    @foreach ($numeros as $numero)
                                        <option value="{{ $numero }}">{{$numero}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex flex-col mr-2">
                                <label for="diez" class="font-bold text-center">10</label>
                                <select id="diez" wire:model="diez" class="rounded border border-green-400 hover:border-green-700 w-12 p-1">
                                    @foreach ($numeros as $numero)
                                        <option value="{{ $numero }}">{{$numero}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex flex-col mr-4">
                                <label for="quince" class="font-bold text-center">15</label>
                                <select id="quince" wire:model="quince" class="rounded border border-green-400 hover:border-green-700 w-12 p-1">
                                    @foreach ($numeros as $numero)
                                        <option value="{{ $numero }}">{{$numero}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex flex-col mr-4">
                                <label for="calle" class="font-bold ml-1">Calle</label>
                                <input type="text" id="calle" placeholder="Calle" wire:model="calle" class="rounded border border-green-400 hover:border-green-700 w-72 p-1">
                            </div>

                            <div class="flex flex-col mr-4">
                                <label for="numero" class="font-bold ml-1">Numero</label>
                                <input type="text" id="numero" placeholder="No." wire:model="numero" class="rounded border border-green-400 hover:border-green-700 w-20 p-1">
                            </div>

                            <div class="flex flex-col mr-4">
                                <label for="cruce_uno" class="font-bold ml-1">Entre calle</label>
                                <input type="text" id="cruce_uno" placeholder="Calle" wire:model="cruce_uno" class="rounded border border-green-400 hover:border-green-700 w-72 p-1">
                            </div>

                            <div class="flex flex-col mr-4">
                                <label for="cruce_dos" class="font-bold ml-1">Y calle</label>
                                <input type="text" id="cruce_dos" placeholder="Calle" wire:model="cruce_dos" class="rounded border border-green-400 hover:border-green-700 w-72 p-1">
                            </div>
                        </div>

                        <div class="flex justify-between mt-2">
                            <div class="flex flex-col">
                                <label for="nombre" class="font-bold ml-1">Nombre</label>
                                <input type="text" id="nombre" placeholder="Nombre" wire:model="nombre" class="rounded border border-green-400 hover:border-green-700 w-56 p-1">
                            </div>

                            <div class="flex flex-col">
                                <label for="telefono" class="font-bold ml-1">Telefono</label>
                                <input type="tel" id="telefono" placeholder="Telefono" wire:model="telefono" class="rounded border border-green-400 hover:border-green-700 w-44 p-1">
                            </div>

                            <div class="flex flex-col">
                                <label for="giro" class="font-bold ml-1">Giro</label>
                                <select id="giro" wire:model="giro" class="rounded border border-green-400 hover:border-green-700 w-32 p-1">
                                    @foreach ($giros as $giro)
                                        <option value="{{ $giro }}">{{$giro}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex flex-col">
                                <label for="link" class="font-bold ml-1">Link de Google</label>
                                <input type="url" id="link" wire:model="link" placeholder="Link" class="rounded border border-green-400 hover:border-green-700 w-64 p-1">
                            </div>

                            <div class="flex flex-col">
                                <label for="observaciones" class="font-bold ml-1">Observaciones</label>
                                <input type="text" id="observaciones" placeholder="Observaciones" wire:model="observaciones" class="rounded border border-green-400 hover:border-green-700 w-64 p-1">
                            </div>

                        </div>

                        <div class="flex justify-between mt-2">
                            <div class="flex flex-col">
                                <label for="latitud" class="font-bold ml-1">Latitud</label>
                                <input type="text" placeholder="Latitud" wire:model="latitud" class="rounded border border-green-400 hover:border-green-700 w-64 p-1">
                            </div>

                            <div class="flex flex-col">
                                <label for="longitud" class="font-bold ml-1">Longitud</label>
                                <input type="text" id="longitud" placeholder="Longitud" wire:model="longitud" class="rounded border border-green-400 hover:border-green-700 w-64 p-1">
                            </div>

                            <div class="flex flex-col">
                                <label for="consecutivo" class="font-bold ml-1">Consecutivo</label>
                                <input type="text" id="consecutivo" placeholder="Consecutivo" wire:model="consecutivo" class="rounded border border-green-400 hover:border-green-700 w-24 p-1">
                            </div>

                            <div class="flex flex-col">
                                <label for="vendedor" class="font-bold ml-1">Vendedor</label>
                                <select id="vendedor" wire:model="vendedor" class="rounded border border-green-400 hover:border-green-700 w-64 p-1">
                                    @foreach ($vendedores as $vendedor)
                                        <option value="{{ $vendedor->id }}">{{$vendedor->data->nombre}} {{$vendedor->data->paterno}} {{$vendedor->data->materno}}</option>
                                    @endforeach
                                </select>
                            </div>

                            @if ($banderaOpcion == 1)
                                <button class="rounded px-4 py-2 font-bold text-white bg-blue-500 hover:bg-blue-700 mt-3">Agregar</button> 
                                <button class="rounded px-4 py-2 font-bold text-white bg-red-500 hover:bg-red-700 mt-3" wire:click="cerrar">Cancelar</button>
                            @endif
                        </div>
                    </div>                
                </div>
            </div>
        @endif
        


        <table id="miTabla" class="shadow-xl border-2 border-black w-full">
            <thead>
                <tr class="bg-black text-white">
                    <th class="px-2 py-1 text-left">id</th>
                    <th class="px-2 py-1 text-left">Seg</th>
                    <th class="px-2 py-1 text-left">7</th>
                    <th class="px-2 py-1 text-left">10</th>
                    <th class="px-2 py-1 text-left">15</th>
                    <th class="px-2 py-1 text-left">Calle</th>
                    <th class="px-2 py-1 text-left">No.</th>
                    <th class="px-2 py-1 text-left">Cruces</th>
                    <th class="px-2 py-1 text-left">Nombre</th>
                    <th class="px-2 py-1 text-left">Giro</th>
                    <th class="px-2 py-1 text-left">Telefono</th>
                    <!-- Agrega más columnas según tus necesidades -->
                </tr>
            </thead>
            <tbody>
                <!-- Aquí irán los datos de la tabla -->
                <tr class="border border-black py-2 bg-gray-100 transition duration-300 ease-in-out hover:bg-green-100 hover:cursor-pointer">
                    @foreach ($clientes as $cliente)
                        <td class="px-2 py-1 border border-black">{{ $cliente->id }}</td>
                        <td class="px-2 py-1 border border-black">{{ $cliente->consecutivo }}</td>
                        <td class="px-2 py-1 border border-black">{{ $cliente->siete }}</td>
                        <td class="px-2 py-1 border border-black">{{ $cliente->diez }}</td>
                        <td class="px-2 py-1 border border-black">{{ $cliente->quince }}</td>
                        <td class="px-2 py-1 border border-black">{{ $cliente->calle }}</td>
                        <td class="px-2 py-1 border border-black">{{ $cliente->numero }}</td>
                        <td class="px-2 py-1 border border-black">{{ $cliente->cruce_uno }} y {{ $cliente->cruce_dos }}</td>
                        <td class="px-2 py-1 border border-black">{{ $cliente->nombre_cliente }}</td>
                        <td class="px-2 py-1 border border-black">{{ $cliente->giro }}</td>
                        <td class="px-2 py-1 border border-black">{{ $cliente->telefono }}</td>
                    @endforeach
            </tbody>
        </table>
        @if($flagDatos)
            {{ $clientes->links() }}
        @else
            <div class="font-bold py-2 bg-white w-full text-center shadow-xl">No Hay Clientes</div>
        @endif
    </div>

</div>