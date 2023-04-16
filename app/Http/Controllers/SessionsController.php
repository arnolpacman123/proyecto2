<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;

class SessionsController extends Controller
{
    use AuthenticatesUsers;

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'numero_registro' => ['required', 'max:255', 'regex:/^[0-9]+$/', 'exists:usuarios,numero_registro'],
            'contrasena' => ['required', 'max:255'],
        ], [
            'numero_registro.required' => 'El número de registro es requerido',
            'numero_registro.regex' => 'El número de registro solo puede contener números',
            'numero_registro.exists' => 'El número de registro no existe',
            'contrasena.required' => 'La contraseña es requerida',
        ]);


        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();

        return redirect()->route('dashboard');
    }

    public function show()
    {
        request()->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            request()->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);

    }

    public function update()
    {

        request()->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            request()->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => ($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('login');
    }

}
