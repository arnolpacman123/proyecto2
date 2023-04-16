<?php

namespace App\Http\Controllers;

use App\Models\CargaHoraria;
use App\Models\Grupo;
use App\Models\GrupoMateria;
use App\Models\Postulante;
use Illuminate\Http\Request;

class CargaHorariaController extends Controller
{
    public function index()
    {
        //
    }

    public function create($postulanteId)
    {
        $postulante = Postulante::findOrFail($postulanteId);

        return view('pages.carga-horaria.create', compact('postulante'));
    }

    public function store(Request $request, $postulanteId)
    {
        $postulante = Postulante::findOrFail($postulanteId);
        $materiaConvocada = $postulante->materiaConvocada;
        $materia = $materiaConvocada->materia;

        $grupos_ids = $request->input('grupos_ids');
        // obtener todos los grupos a partir de los ids
        $grupos = Grupo::whereIn('id', $grupos_ids)->get();

        // obtener el formulario
        $formulario = $postulante->formularioRelation;

        // recorrer los grupos y guardar la carga horaria
        foreach ($grupos as $grupo) {
            $grupoMateria = GrupoMateria::where('grupo_id', $grupo->id)
                ->where('materia_id', $materia->id)
                ->first();

            // crear la carga horaria
            CargaHoraria::create([
                'horas_asignadas' => $request->input('horas_asignadas'),
                'grupo_materia_id' => $grupoMateria->id,
                'formulario_id' => $formulario->id,
            ]);
        }

        return redirect()->route('postulantes.show', $postulante->id);
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
