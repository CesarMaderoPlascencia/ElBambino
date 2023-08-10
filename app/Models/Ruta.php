<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario_id',
        'nombre',
        'paterno',
        'materno',
        'fecha_nacimiento',
        'direccion',
        'telefono',
        'fecha_ingreso',
        'puesto',
    ];
}
