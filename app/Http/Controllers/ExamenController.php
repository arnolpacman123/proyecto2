<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use App\Models\MateriaConvocada;
use App\Models\TipoUsuario;
use App\Models\User;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create($materiaConvocadaId)
    {
        $materiaConvocada = MateriaConvocada::findOrFail($materiaConvocadaId);

        $tipoUsuario = TipoUsuario::where('nombre_tipo', 'Docente')->first();

        $docentes = User::where('tipo_usuario_id', $tipoUsuario->id)->get();

        return view('pages.evaluaciones.create', compact('materiaConvocada', 'docentes'));
    }

    public function store(Request $request, $materiaConvoacadaId)
    {
        $materiaConvocada = MateriaConvocada::findOrFail($materiaConvoacadaId);

        Evaluacion::create([
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'lugar' => $request->lugar,
            'usuario_id' => $request->usuario_id,
            'materia_convocada_id' => $materiaConvocada->id,
        ]);

        return redirect()->route('convocatorias.materias-convocadas.show', $materiaConvocada->convocatoria_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
