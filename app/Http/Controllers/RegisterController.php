<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'nombres' => ['required', 'min:3', 'max:255'],
            'apellidos' => ['required', 'min:3', 'max:255'],
            'numero_registro' => ['required', 'min:3', 'max:255', 'unique:usuarios'],
            'contrasena' => ['required', 'min:3', 'max:255'],
            'tipo_usuario_id' => ['required', 'min:1', 'max:255'],
        ]);

        $user = User::create([
            'nombres' => $attributes['nombres'],
            'apellidos' => $attributes['apellidos'],
            'numero_registro' => $attributes['numero_registro'],
            'contrasena' => Hash::make($attributes['contrasena']),
            'tipo_usuario_id' => $attributes['tipo_usuario_id'],
        ]);

        auth()->login($user);

        return redirect('/dashboard');
    }
}
