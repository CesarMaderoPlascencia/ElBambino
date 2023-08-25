<?php

namespace App\Http\Livewire;

use App\Models\cliente;
use App\Models\Ruta;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class RutasClientes extends Component
{
    use WithPagination;
    public $nombreRuta;
    public $rutas;
    public $flagDatos;
    public $semana;
    public $semanasNombre;
    public $dia;
    public $diasNombre;
    public $showModal;
    public $numeros;
    public $giros;
    public $vendedores;
    public $banderaOpcion;
    
    //Variables de clientes
    public $siete;
    public $diez;
    public $quince;
    public $calle;
    public $numero;
    public $cruce_uno;
    public $cruce_dos;
    public $nombre;
    public $telefono;
    public $giro;
    public $link;
    public $observaciones;
    public $latitud;
    public $longitud;
    public $consecutivo;
    public $vendedor;
    public function render()
    {
        $this->flagDatos = true;

        //Rellena Ruta
        $this->rutas = Ruta::select('nombre')->orderBy('nombre', 'asc')->distinct('nombre')->get();

        //Rellena Semana
        if($this->nombreRuta == 0){
            $this->semanasNombre = [];
            $this->diasNombre = [];
        }
        else{
            $nombre = $this->nombreRuta;
            $this->semanasNombre = Ruta::select('semana')->where('nombre', $nombre)->distinct('nombre')->get();
        }

        //Rellena Dia
        if($this->semana == 0){
            $this->diasNombre = [];
        }
        else{
            $semana = $this->semana;
            $this->diasNombre = Ruta::select('id','dia')->where('semana', $semana)->get();
        }

        //Rellena Tabla
        if($this->dia == 0)
        {
            $clientes = [];
            $this->flagDatos = false;
        }
        else{
            $clientes = Cliente::all();

            if($clientes->count() == 0) {
                $clientes = [];
                $this->flagDatos = false;
            }
        }
        

        return view('livewire.rutas-clientes',[
            'clientes' => $clientes,
        ]);
    }

    public function mount()
    {
        $this->semanasNombre = [];
        $this->diasNombre = [];
        $this->flagDatos = true;
        $this->showModal = false;
        for ($i = 0; $i <= 12; $i++) {
            $numeros[] = $i; // Agregar cada número al arreglo
        }
        $this->numeros = $numeros;

        $this->giros = array('Abarrotes', 'Farmacia', 'Papeleria' , 'Minisuper',
                                'Cremeria', 'Licoreria', 'Frutas y Verduras', 'Carniceria',
                                'Mesita', 'Otro');

        $this->vendedores = User::with('data')->get();
        $this->banderaOpcion = 0;
        $this->siete = 0;
        $this->diez = 0;
        $this->quince = 0;
        $this->calle = "";
        $this->numero = "";
        $this->cruce_uno = "";
        $this->cruce_dos = "";
        $this->nombre = "";
        $this->telefono = "";
        $this->link = "";
        $this->observaciones = "";
        $this->latitud = "";
        $this->longitud = "";
        $this->consecutivo = "";
    }

    public function cambioNombreRuta()
    {
        $this->semana = 0;
        $this->dia = 0;
        $this->cerrar();
    }
    public function cambioNombreSemana()
    {
        $this->dia = 0;
        $this->cerrar();
    }

    public function nuevo()
    {
        $this->showModal = true;
        $this->banderaOpcion = 1;
    }

    public function cerrar()
    {
        $this->showModal = false;
        $this->banderaOpcion = 0;
        $this->siete = 0;
        $this->diez = 0;
        $this->quince = 0;
        $this->calle = "";
        $this->numero = "";
        $this->cruce_uno = "";
        $this->cruce_dos = "";
        $this->nombre = "";
        $this->telefono = "";
        $this->link = "";
        $this->observaciones = "";
        $this->latitud = "";
        $this->longitud = "";
        $this->consecutivo = "";
    }

    public function agregarCliente()
    {
        cliente::create([
            'consecutivo' => $this->consecutivo,
            'siete' => $this->siete,
            'diez' => $this->diez,
            'quince' => $this->quince,
        ]);
    }

    public function ultimoConsecutivo()
    {

    }
}
