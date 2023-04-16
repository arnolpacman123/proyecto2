<?php

namespace App\Http\Controllers;

use App\Models\Postulante;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($postulanteId)
    {
        $postulante = Postulante::findOrFail($postulanteId);

        return view('pages.formularios.show', compact('postulante'));
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $postulanteId)
    {
        $postulante = Postulante::findOrFail($postulanteId);

        $formulario = $postulante->formularioRelation;

        $formulario->update($request->all());

        return redirect()->route('postulantes.show', $postulante->id)->with('success', 'Formulario actualizado correctamente');
    }


    public function destroy($id)
    {
        //
    }
}
