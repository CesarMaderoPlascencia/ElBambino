<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'semana',
        'dia',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
