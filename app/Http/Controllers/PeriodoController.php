<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    public function index()
    {
        $periodos = Periodo::all()->sortByDesc('fecha_inicio');
        return view('pages.periodos.index', compact('periodos'));
    }

    public function create()
    {
        return view('pages.periodos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero' => ['required', 'integer', 'min:1', 'max:5'],
            'ano' => ['required', 'integer', 'min:1900', 'max:2200'],
            'fecha_inicio' => ['required', 'date'],
            'fecha_fin' => ['required', 'date'],
        ], [
            'numero.required' => 'El campo número es obligatorio.',
            'numero.integer' => 'El campo número debe ser un número entero.',
            'numero.min' => 'El campo número debe ser mayor o igual a 1.',
            'numero.max' => 'El campo número debe ser menor o igual a 5.',
            'ano.required' => 'El campo año es obligatorio.',
            'ano.integer' => 'El campo año debe ser un número entero.',
            'ano.min' => 'El campo año debe ser mayor o igual a 1900.',
            'ano.max' => 'El campo año debe ser menor o igual a 2200.',
            'fecha_inicio.required' => 'El campo fecha de inicio es obligatorio.',
            'fecha_inicio.date' => 'El campo fecha de inicio debe ser una fecha válida.',
            'fecha_fin.required' => 'El campo fecha de fin es obligatorio.',
            'fecha_fin.date' => 'El campo fecha de fin debe ser una fecha válida.',
        ]);
        $nombreDiccionario = [
            1 => 'Primer',
            2 => 'Segundo',
            3 => 'Tercer',
            4 => 'Cuarto',
            5 => 'Quinto',
        ];
        Periodo::create(
            $request->all() +
            [
                'nombre' => $nombreDiccionario[$request->input('numero')] . ' periodo',
            ]
        );
        return redirect()->route('periodos.index')->with('success', 'Periodo creado correctamente.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
