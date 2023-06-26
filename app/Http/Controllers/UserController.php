<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('User.newUser');
    }
}
