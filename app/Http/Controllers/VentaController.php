<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function indexVentas()
    {
        return view('ventas.indexVentas');
    }

    public function nuevaVenta()
    {
        return view('ventas.nuevaVenta');
    }
}
