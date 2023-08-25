<?php

namespace App\Http\Controllers;

use App\Models\Ruta;
use App\Models\User;
use Illuminate\Http\Request;


class RutaController extends Controller
{
    
    public function index()
    {
        return view('rutas.indexRutas');
    }

    public function nuevaRuta()
    {
        $rutas = Ruta::orderBy('nombre', 'asc')
            ->with([
                'vendedor' => function ($query) {
                    $query->with('data');
                }
            ])
            ->get();
       // dd($rutas[0]);
        $vendedores = User::with('data')
            ->whereHas('data', function ($query) {
                $query->where('puesto', '<>', 'Almacen');
            })
            ->get();

        if($rutas->count() == 0)$rutas = [];
        return view('rutas.nuevaRuta', compact('rutas', 'vendedores'));
    }

    public function ingresar(Request $request)
    {
        $this->validate($request,[
            'nombreRuta' => ['required'],
            'semana' => ['required'],
            'dia' => ['required'],
            'vendedor' => ['required'],
        ]);

        // Validar la unicidad de la ruta antes de crearla
        $existeRuta = Ruta::where([
            'nombre' => $request->nombreRuta,
            'semana' => $request->semana,
            'dia' => $request->dia,
        ])->exists();

        if ($existeRuta) {
            $mensajeError = 'La Ruta ya Existe';
            return back()->with('mensajeError', $mensajeError);
        }

        Ruta::create([
            'nombre' => $request->nombreRuta,
            'semana' => $request->semana,
            'dia' => $request->dia,
            'id_vendedor' => $request->vendedor,
        ]);
        $mensaje = 'Ruta Añadida Exitosamente';
        return back()->with('mensaje', $mensaje);
    }

    public function clientes()
    {
        return view('rutas.rutas_clientes');
    }
}
