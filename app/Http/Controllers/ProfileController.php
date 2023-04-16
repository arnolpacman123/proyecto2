<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        return view('pages.profile');
    }

    public function update()
    {
        request()->validate([
            'nombres' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'numero_registro' => ['required', 'string', 'max:255', 'unique:usuarios,numero_registro,' . auth()->user()->id],
            'tipo_usuario_id' => ['required'],
        ], [
            'nombres.required' => 'El campo nombres es obligatorio',
            'apellidos.required' => 'El campo apellidos es obligatorio',
            'numero_registro.required' => 'El campo numero de registro es obligatorio',
            'tipo_usuario_id.required' => 'El campo tipo de usuario es obligatorio',
        ]);


        auth()->user()->update([
            'nombres' => request('nombres'),
            'apellidos' => request('apellidos'),
            'correo' => request('correo'),
            'celular' => request('celular'),
            'direccion' => request('direccion'),
        ]);

        return back()->withStatus('Perfil actualizado con éxito');

    }
}
