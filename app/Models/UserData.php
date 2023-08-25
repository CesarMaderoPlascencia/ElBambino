<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
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

    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
