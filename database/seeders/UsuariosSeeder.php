<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\UserData;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'username' => 'CesarMadero',
            'email' => 'cesarurmp@gmail.com',
            'password' => Hash::make('bambines'),
        ]);
        $user->assignRole('Admin');

        $userData = new UserData();
        $userData->usuario_id = $user->id;
        $userData->nombre = 'Cesar Uriel';
        $userData->paterno = 'Madero';
        $userData->materno = 'Plascencia';
        $userData->fecha_nacimiento = '1993-09-23';
        $userData->direccion = 'Oasis #207 int 41';
        $userData->telefono = '3321064773';
        $userData->fecha_ingreso = '2023-06-16';
        $userData->puesto = 'Administrador';
        $userData->save();
    }
}
