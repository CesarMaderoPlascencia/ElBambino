<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $this->validate($request, [
            'username' => ['required'],
            'password' => ['required', 'same:rpassword'],
        ], [
            'password.same' => 'Las contraseñas no coinciden.',
        ]);

        if (!auth()->attempt($request->only('username', 'password'), $request->remember)) {
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        return redirect()->route('index', auth()->user()->username);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('user.login');
    }

    public function indexUser()
    {
        return view('User.indexUsers');
    }

    public function newUser()
    {
        $roles = Role::where('name', '<>', 'Admin')->orderBy('name', 'desc')->get();
        return view('User.newUser', compact('roles'));
    }

    public function ingresar(Request $request)
    {
        try {
            DB::beginTransaction();
        
            // Intentar crear el usuario
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        
            // Asignar el rol al usuario
            $user->assignRole($request->puesto);
        
            // Crear y guardar los datos del usuario
            $userData = new UserData();
            $userData->usuario_id = $user->id;
            $userData->nombre = $request->name;
            $userData->paterno = $request->paterno;
            $userData->materno = $request->materno;
            $userData->fecha_nacimiento = $request->birthdate;
            $userData->direccion = $request->address;
            $userData->telefono = $request->tel;
            $userData->fecha_ingreso = $request->admission;
            $userData->puesto = $request->puesto;
            $userData->save();
        
            DB::commit(); // Confirmar la transacción si todo fue exitoso
        } catch (\Exception $e) {
            DB::rollback(); // Revertir la transacción en caso de error
            //Log::error('Error al crear el usuario: ' . $e->getMessage());
            return redirect()->route('user.index')->with('error', 'El Usuario no pudo ser creado.');
        }

        return redirect()->route('user.index')->with('success', 'Usuario creado exitosamente.');
    }

    public function lista()
    {
        $usuarios = User::with('data')->get();
        
        return view('User.list', compact('usuarios'));
    }
}
