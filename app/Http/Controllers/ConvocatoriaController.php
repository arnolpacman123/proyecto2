<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use App\Models\Materia;
use App\Models\MateriaConvocada;
use App\Models\Periodo;
use Illuminate\Http\Request;

class ConvocatoriaController extends Controller
{
    public function index()
    {
        if (auth()->user()->tipoUsuario->nombre_tipo === 'Estudiante') {
            $convocatorias = Convocatoria::where('estado', true)->get()->sortByDesc('numero_convocatoria');
        } else {
            $convocatorias = Convocatoria::all()->sortByDesc('numero_convocatoria');
        }
        return view('pages.convocatorias.index', compact('convocatorias'));
    }


    public function create()
    {
        $periodos = Periodo::all();
        $materias = Materia::all();
        return view('pages.convocatorias.create', compact('periodos', 'materias'));
    }

    public function materiaConvocadaShow($materiaConvocadaId) {
        $materiaConvocada = MateriaConvocada::find($materiaConvocadaId);
        $postulantes = $materiaConvocada->postulantes;
        return view('pages.materias-convocadas.show', compact('materiaConvocada', 'postulantes'));
    }


    public function store(Request $request)
    {
        $request->merge(['numero_convocatoria' => uniqid()]);

        $request->validate([
            'numero_convocatoria' => 'required|unique:convocatorias',
            'descripcion' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'periodo_id' => 'required|exists:periodos,id',
        ], [
            'numero_convocatoria.required' => 'El campo número de convocatoria es obligatorio',
            'numero_convocatoria.unique' => 'El número de convocatoria ya existe',
            'descripcion.required' => 'El campo descripción es obligatorio',
            'fecha_inicio.required' => 'El campo fecha de inicio es obligatorio',
            'fecha_inicio.date' => 'El campo fecha de inicio debe ser una fecha válida',
            'fecha_fin.required' => 'El campo fecha de fin es obligatorio',
            'fecha_fin.date' => 'El campo fecha de fin debe ser una fecha válida',
            'periodo_id.required' => 'El campo periodo es obligatorio',
            'periodo_id.exists' => 'El periodo seleccionado no existe',
        ]);

        $convocatoria = Convocatoria::create($request->only('numero_convocatoria', 'fecha_inicio', 'fecha_fin', 'periodo_id', 'descripcion'));

        foreach ($request->input('materias_ids') as $materia_id) {
            $materia = Materia::find($materia_id);
            $materiaConvocada = new MateriaConvocada();
            $materiaConvocada->materia()->associate($materia);
            $materiaConvocada->convocatoria()->associate($convocatoria);
            $materiaConvocada->save();
        }

        return redirect()->route('convocatorias.index')->with('success', 'Convocatoria creada correctamente');
    }

    public function show($id)
    {
        $convocatoria = Convocatoria::findOrFail($id);
        return view('pages.convocatorias.show', compact('convocatoria'));
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
