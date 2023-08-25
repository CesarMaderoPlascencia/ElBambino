@extends('layouts.app')

@section('titulo')
    Nueva Venta
@endsection

@section('contenido')
    <script src="{{ asset('js/venta.js') }}"></script>

    <div class="flex flex-col justify-center gap-10 items-center mx-2">
        <div class="grid grid-cols-1 md:grid-cols-2 w-10/12 gap-4 bg-gradient-to-br from-gray-300 to-green-100 p-6 rounded-lg shadow-2xl border-2 border-green-500 mt-6">
        <!-- CARGA -->
        <div class="w-full h-full border-2 border-black rounded p-2">
            <div class="flex flex-col justify-center">
                <div class="font-bold text-center text-2xl">Carga</div>
                <div class="flex flex-col">

                    <div class="grid grid-cols-3">
                        <div class="flex justify-center align-middle items-center">
                            <label for="carga_siete" class="text-center font-bold mr-2 ml-2"> 7</label>
                            <input type="number" id="carga_siete" name="carga_siete" oninput="calcularPiezas()"
                                class="rounded border w-20 border-green-400 hover:border-green-700 px-2">
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Piezas</div>
                            <div class="text-center font-bold mr-2" id="piezas_carga_siete">0</div>
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div id="valor_carga_siete">0</div> </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 mt-3">
                        <div class="flex justify-center align-middle items-center">
                            <label for="carga_diez" class=" text-center font-bold mr-2">10</label>
                            <input type="number" id="carga_diez" name="carga_diez" oninput="calcularPiezas()" 
                                class="rounded border w-20 border-green-400 hover:border-green-700 px-2">
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Piezas</div>
                            <div class="text-center font-bold mr-2" id="piezas_carga_diez">0</div>
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div id="valor_carga_diez">0</div> </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 mt-3 mb-2">
                        <div class="flex justify-center align-middle items-center">
                            <label for="carga_quince" class=" text-center font-bold mr-2">15</label>
                            <input type="number" id="carga_quince" name="carga_quince" oninput="calcularPiezas()" 
                                class="rounded border w-20 border-green-400 hover:border-green-700 px-2">
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Piezas</div>
                            <div class="text-center font-bold mr-2" id="piezas_carga_quince">0</div>
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div id="valor_carga_quince">0</div> </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Descarga -->

        <div class="w-full h-full border-2 border-black rounded p-2">
            <div class="flex flex-col justify-center">
                <div class="font-bold text-center text-2xl">Descarga</div>
                <div class="flex flex-col">

                    <div class="grid grid-cols-3">
                        <div class="flex justify-center align-middle items-center">
                            <label for="descarga_siete" class="text-center font-bold mr-2 ml-2">7</label>
                            <input type="number" id="descarga_siete" name="descarga_siete" oninput="calcularPiezas()" 
                                class="rounded border w-20 border-green-400 hover:border-green-700 px-2">
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Piezas</div>
                            <div class="text-center font-bold mr-2" id="piezas_descarga_siete">0</div>
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div id="valor_descarga_siete">0</div> </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 mt-3">
                        <div class="flex justify-center align-middle items-center">
                            <label for="descarga_diez" class="text-center font-bold mr-2">10</label>
                            <input type="number" id="descarga_diez" name="descarga_diez" oninput="calcularPiezas()"  
                                class="rounded border w-20 border-green-400 hover:border-green-700 px-2">
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Piezas</div>
                            <div class="text-center font-bold mr-2" id="piezas_descarga_diez">0</div>
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div id="valor_descarga_diez">0</div> </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 mt-3 mb-2">
                        <div class="flex justify-center align-middle items-center">
                            <label for="descarga_quince" class=" text-center font-bold mr-2">15</label>
                            <input type="number" id="descarga_quince" name="descarga_quince" oninput="calcularPiezas()" 
                                class="rounded border w-20 border-green-400 hover:border-green-700 px-2">
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Piezas</div>
                            <div class="text-center font-bold mr-2" id="piezas_descarga_quince">0</div>
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div id="valor_descarga_quince">0</div> </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Bajas -->

        <div class="w-full h-full border-2 border-black rounded p-2 ">
            <div class="flex flex-col justify-center">
                <div class="font-bold text-center text-2xl">Bajas</div>
                <div class="flex flex-col">

                    <div class="grid grid-cols-3">
                        <div class="flex justify-center align-middle items-center">
                            <label for="baja_siete" class=" text-center font-bold mr-2 ml-2">7</label>
                            <input type="number" id="baja_siete" name="baja_siete" oninput="calcularPiezas()" 
                                class="rounded border w-20 border-green-400 hover:border-green-700 px-2">
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Piezas</div>
                            <div class="text-center font-bold mr-2" id="piezas_baja_siete">0</div>
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div id="valor_baja_siete">0</div> </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 mt-3">
                        <div class="flex justify-center align-middle items-center">
                            <label for="baja_diez" class=" text-center font-bold mr-2">10</label>
                            <input type="number" id="baja_diez" name="baja_diez" oninput="calcularPiezas()"
                                 class="rounded border w-20 border-green-400 hover:border-green-700 px-2">
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Piezas</div>
                            <div class="text-center font-bold mr-2" id="piezas_baja_diez">0</div>
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div id="valor_baja_diez">0</div> </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 mt-3 mb-2">
                        <div class="flex justify-center align-middle items-center">
                            <label for="baja_quince" class=" text-center font-bold mr-2">15</label>
                            <input type="number" id="baja_quince" name="baja_quince" oninput="calcularPiezas()"
                                 class="rounded border w-20 border-green-400 hover:border-green-700 px-2">
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Piezas</div>
                            <div class="text-center font-bold mr-2" id="piezas_baja_quince">0</div>
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div id="valor_baja_quince">0</div> </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Altas -->

        <div class="w-full h-full border-2 border-black rounded p-2 ">
            <div class="flex flex-col justify-center">
                <div class="font-bold text-center text-2xl">Altas</div>
                <div class="flex flex-col">

                    <div class="grid grid-cols-3">
                        <div class="flex justify-center align-middle items-center">
                            <label for="alta_siete" class=" text-center font-bold mr-2 ml-2">7</label>
                            <input type="number" id="alta_siete" name="alta_siete" oninput="calcularPiezas()"
                                 class="rounded border w-20 border-green-400 hover:border-green-700 px-2">
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Piezas</div>
                            <div class="text-center font-bold mr-2" id="piezas_alta_siete">0</div>
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div id="valor_alta_siete">0</div> </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 mt-3">
                        <div class="flex justify-center align-middle items-center">
                            <label for="alta_diez" class=" text-center font-bold mr-2">10</label>
                            <input type="number" id="alta_diez" name="alta_diez" oninput="calcularPiezas()" 
                                class="rounded border w-20 border-green-400 hover:border-green-700 px-2">
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Piezas</div>
                            <div class="text-center font-bold mr-2" id="piezas_alta_diez">0</div>
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div id="valor_alta_diez">0</div> </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 mt-3 mb-2">
                        <div class="flex justify-center align-middle items-center">
                            <label for="alta_quince" class=" text-center font-bold mr-2">15</label>
                            <input type="number" id="alta_quince" name="alta_quince" oninput="calcularPiezas()" 
                                class="rounded border w-20 border-green-400 hover:border-green-700 px-2">
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Piezas</div>
                            <div class="text-center font-bold mr-2" id="piezas_alta_quince">0</div>
                        </div>
                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div id="valor_alta_quince">0</div> </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Piezas Extra -->

        <div class="w-full h-full border-2 border-black rounded p-2 ">
            <div class="flex flex-col justify-center">
                <div class="font-bold text-center text-2xl">Piezas Extra</div>
                <div class="flex flex-col">

                    <div class="flex justify-around mt-3">
                        <div class="flex justify-center">
                            <label for="extra_siete" class=" text-center font-bold mr-2 ml-2">7</label>
                            <input type="number" id="extra_siete" name="extra_siete" oninput="calcularPiezas()" 
                                class="rounded border w-40 border-green-400 hover:border-green-700 px-2">
                        </div>

                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div id="valor_extra_siete">0</div> </div>
                        </div>
                    </div>

                    <div class="flex justify-around mt-3">
                        <div class="flex justify-center">
                            <label for="extra_diez" class=" text-center font-bold mr-2">10</label>
                            <input type="number" id="extra_diez" name="extra_diez" oninput="calcularPiezas()" 
                                class="rounded border w-40 border-green-400 hover:border-green-700 px-2">
                        </div>

                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div id="valor_extra_diez">0</div> </div>
                        </div>
                    </div>

                    <div class="flex justify-around mt-3">
                        <div class="flex justify-center">
                            <label for="extra_quince" class=" text-center font-bold mr-2">15</label>
                            <input type="number" id="extra_quince" name="extra_quince" oninput="calcularPiezas()" 
                                class="rounded border w-40 border-green-400 hover:border-green-700 px-2">
                        </div>

                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div id="valor_extra_quince">0</div> </div>
                        </div>
                    </div>

                    <div class="flex justify-around mt-3 mb-2">
                        <div class="flex flex-col justify-center">
                            <label for="valor_extra_dinero" class=" text-center font-bold mr-4">Dinero Extra</label>
                            <input type="number" id="valor_extra_dinero" name="valor_extra_dinero" oninput="calcularPiezas()" 
                                class="rounded border w-64 border-green-400 hover:border-green-700 px-2">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Descarga Chilaquil -->

        <div class="w-full h-full border-2 border-black rounded p-2 ">
            <div class="flex flex-col justify-center">
                <div class="font-bold text-center text-2xl">Descarga Chilaquil</div>
                <div class="flex flex-col">

                    <div class="flex justify-around mt-3">
                        <div class="flex justify-center">
                            <label for="" class=" text-center font-bold mr-2 ml-2">7</label>
                            <input type="number" class="rounded border w-40 border-green-400 hover:border-green-700 px-2">
                        </div>

                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div>0</div> </div>
                        </div>
                    </div>

                    <div class="flex justify-around mt-3">
                        <div class="flex justify-center">
                            <label for="" class=" text-center font-bold mr-2">10</label>
                            <input type="number" class="rounded border w-40 border-green-400 hover:border-green-700 px-2">
                        </div>

                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div>0</div> </div>
                        </div>
                    </div>

                    <div class="flex justify-around mt-3">
                        <div class="flex justify-center">
                            <label for="" class=" text-center font-bold mr-2">15</label>
                            <input type="number" class="rounded border w-40 border-green-400 hover:border-green-700 px-2">
                        </div>

                        <div class="flex justify-center align-middle items-center">
                            <div class="text-center font-bold mr-2">Valor</div>
                            <div class="text-center font-bold mr-2 flex">$ <div>0</div> </div>
                        </div>
                    </div>

                    <div class="flex justify-around mt-3 mb-2">
                        <div class="flex flex-col justify-center">
                            <label for="" class=" text-center font-bold mr-4">Dinero Extra</label>
                            <input type="number" class="rounded border w-64 border-green-400 hover:border-green-700 px-2">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- TOTAL -->

        <div class="w-full h-full border-2 border-black rounded p-2 col-span-2 flex justify-around">
            <div class="font-bold text-7xl text-center"> TOTAL = </div>
            <div  class="flex font-bold text-7xl text-center">$ <div id="valor_total">0</div></div>
        </div>


        </div>
   </div>
@endsection