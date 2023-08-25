<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'semana',
        'dia',
        'id_vendedor',
    ];

    public function vendedor()
    {
        return $this->belongsTo(User::class, 'id_vendedor');
    }
}
