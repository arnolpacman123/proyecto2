<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use App\Models\Formulario;
use App\Models\MateriaConvocada;
use App\Models\Postulante;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Validation\Rule;

class PostulanteController extends Controller
{
    public function index($convocatoriaId, $materiaConvocadaId)
    {
        $convocatoria = Convocatoria::findOrFail($convocatoriaId);
        $materiaConvocada = MateriaConvocada::findOrFail($materiaConvocadaId);
        $postulantes = $materiaConvocada->postulantes;
        return view('pages.postulantes.index', compact('convocatoria', 'materiaConvocada', 'postulantes'));
    }


    public function create($materiaConvocadaId)
    {
        $materiaConvocada = MateriaConvocada::findOrFail($materiaConvocadaId);
        session()->put('materiaConvocada', $materiaConvocada);
        return view('pages.postulantes.create', compact('materiaConvocada'));
    }


    public function store(Request $request, $materiaConvocadaId)
    {
        $materiaConvocada = MateriaConvocada::findOrFail($materiaConvocadaId);

        // obtener el archivo curriculum_vitae
        $curriculumVitae = $request->file('curriculum_vitae');
        // obtener el archivo carta_solicitud
        $cartaSolicitud = $request->file('carta_solicitud');
        // obtener el archivo fotocopia_carnet_identidad
        $fotocopiaCarnetIdentidad = $request->file('fotocopia_carnet_identidad');
        // obtener el archivo avance_academico
        $avanceAcademico = $request->file('avance_academico');
        // obtener el archivo formulario
        $formulario = $request->file('formulario');

        // nombre final del archivo curriculum_vitae a guardarse
        $nombreFinal = auth()->user()->numero_registro . '_' . $curriculumVitae->getClientOriginalName();

        // guardar el archivo curriculum_vitae en el directorio
        $request->file('curriculum_vitae')->storeAs('public/curriculum_vitae', $nombreFinal);

        // nombre final del archivo carta_solicitud a guardarse
        $nombreFinal = auth()->user()->numero_registro . '_' . $cartaSolicitud->getClientOriginalName();

        // guardar el archivo carta_solicitud en el directorio
        $request->file('carta_solicitud')->storeAs('public/carta_solicitud', $nombreFinal);

        // nombre final del archivo fotocopia_carnet_identidad a guardarse
        $nombreFinal = auth()->user()->numero_registro . '_' . $fotocopiaCarnetIdentidad->getClientOriginalName();

        // guardar el archivo fotocopia_carnet_identidad en el directorio
        $request->file('fotocopia_carnet_identidad')->storeAs('public/fotocopia_carnet_identidad', $nombreFinal);

        // nombre final del archivo avance_academico a guardarse
        $nombreFinal = auth()->user()->numero_registro . '_' . $avanceAcademico->getClientOriginalName();

        // guardar el archivo avance_academico en el directorio
        $request->file('avance_academico')->storeAs('public/avance_academico', $nombreFinal);

        // nombre final del archivo formulario a guardarse
        $nombreFinal = auth()->user()->numero_registro . '_' . $formulario->getClientOriginalName();

        // guardar el archivo formulario en el directorio
        $request->file('formulario')->storeAs('public/formulario', $nombreFinal);

        // crear el postulante
        $postulante = Postulante::create([
            'usuario_id' => auth()->user()->id,
            'materia_convocada_id' => $materiaConvocada->id,
            'curriculum_vitae' => $nombreFinal,
            'carta_solicitud' => $nombreFinal,
            'fotocopia_carnet_identidad' => $nombreFinal,
            'avance_academico' => $nombreFinal,
            'formulario' => $nombreFinal,
        ]);

        // crear el formulario y asociarlo al postulante
        Formulario::create([
            'postulante_id' => $postulante->id,
        ]);

        return redirect()->route('postulantes.index', [$materiaConvocada->convocatoria->id, $materiaConvocada->id]);
    }

    public function storeCurriculumVitae(Request $request)
    {
        $postulante = session()->get('postulante');

        // comprobar si el postulante existe
        if (!$postulante) {
            $postulante = Postulante::create([
                'usuario_id' => auth()->user()->id,
                'materia_convocada_id' => session()->get('materiaConvocada')->id,
            ]);
        }

        $postulante = Postulante::findOrFail($postulante->id);

        // obtener el nombre del archivo
        $nombreArchivo = $request->file('curriculum_vitae');

        // nombre final del archivo a guardarse
        $nombreFinal = auth()->user()->numero_registro . '_' . $nombreArchivo;

        // guardar el archivo en el directorio
        $request->file('curriculum_vitae')->storeAs('public/curriculum_vitae', $nombreFinal);

        // actualizar el curriculum vitae del postulante
        $postulante->curriculum_vitae = $nombreFinal;
        $postulante->save();

        // guardar el postulante en la sesión
        session()->put('postulante', $postulante);

        return response()->json([
            'rutaACurriculumVitae' => 'XD',
        ]);
    }

    public function storeCartaSolicitud(Request $request)
    {
        $postulante = session()->get('postulante');

        // comprobar si el postulante existe
        if (!$postulante) {
            $postulante = Postulante::create([
                'usuario_id' => auth()->user()->id,
                'materia_convocada_id' => session()->get('materiaConvocada')->id,
            ]);
        }

        $postulante = Postulante::findOrFail($postulante->id);

        // obtener el nombre del archivo
        $nombreArchivo = $request->file('carta_solicitud')->getClientOriginalName();

        // nombre final del archivo a guardarse
        $nombreFinal = auth()->user()->numero_registro . '_' . $nombreArchivo;

        // guardar el archivo en el directorio
        $request->file('carta_solicitud')->storeAs('public/carta_solicitud', $nombreFinal);

        // actualizar la carta de solicitud del postulante
        $postulante->carta_solicitud = $nombreFinal;
        $postulante->save();

        // guardar el postulante en la sesión
        session()->put('postulante', $postulante);

        return response()->json([
            'rutaACartaSolicitud' => $nombreFinal,
        ]);
    }

    public function storeFotocopiaCarnetIdentidad(Request $request)
    {
        $postulante = session()->get('postulante');

        // comprobar si el postulante existe
        if (!$postulante) {
            $postulante = Postulante::create([
                'usuario_id' => auth()->user()->id,
                'materia_convocada_id' => session()->get('materiaConvocada')->id,
            ]);
        }

        $postulante = Postulante::findOrFail($postulante->id);

        // obtener el nombre del archivo
        $nombreArchivo = $request->file('fotocopia_carnet_identidad')->getClientOriginalName();

        // nombre final del archivo a guardarse
        $nombreFinal = auth()->user()->numero_registro . '_' . $nombreArchivo;

        // guardar el archivo en el directorio
        $request->file('fotocopia_carnet_identidad')->storeAs('public/fotocopia_carnet_identidad', $nombreFinal);

        // actualizar la fotocopia del carnet de identidad del postulante
        $postulante->fotocopia_carnet_identidad = $nombreFinal;
        $postulante->save();

        // guardar el postulante en la sesión
        session()->put('postulante', $postulante);

        return response()->json([
            'rutaAFotocopiaCarnetIdentidad' => $nombreFinal,
        ]);
    }

    public function storeAvanceAcademico(Request $request)
    {
        $postulante = session()->get('postulante');

        // comprobar si el postulante existe
        if (!$postulante) {
            $postulante = Postulante::create([
                'usuario_id' => auth()->user()->id,
                'materia_convocada_id' => session()->get('materiaConvocada')->id,
            ]);
        }

        $postulante = Postulante::findOrFail($postulante->id);

        // obtener el nombre del archivo
        $nombreArchivo = $request->file('avance_academico')->getClientOriginalName();

        // nombre final del archivo a guardarse
        $nombreFinal = auth()->user()->numero_registro . '_' . $nombreArchivo;

        // guardar el archivo en el directorio
        $request->file('avance_academico')->storeAs('public/avance_academico', $nombreFinal);

        // actualizar el avance académico del postulante
        $postulante->avance_academico = $nombreFinal;
        $postulante->save();

        // guardar el postulante en la sesión
        session()->put('postulante', $postulante);

        return response()->json([
            'rutaAAvanceAcademico' => $nombreFinal,
        ]);
    }

    public function storeFormulario(Request $request)
    {
        $postulante = session()->get('postulante');

        // comprobar si el postulante existe
        if (!$postulante) {
            $postulante = Postulante::create([
                'usuario_id' => auth()->user()->id,
                'materia_convocada_id' => session()->get('materiaConvocada')->id,
            ]);

            Formulario::create([
                'postulante_id' => $postulante->id,
            ]);
        }

        $postulante = Postulante::findOrFail($postulante->id);

        // obtener el nombre del archivo
        $nombreArchivo = $request->file('formulario')->getClientOriginalName();

        // nombre final del archivo a guardarse
        $nombreFinal = auth()->user()->numero_registro . '_' . $nombreArchivo;

        // guardar el archivo en el directorio
        $request->file('formulario')->storeAs('public/formulario', $nombreFinal);

        // actualizar el formulario del postulante
        $postulante->formulario = $nombreFinal;
        $postulante->save();

        // guardar el postulante en la sesión
        session()->put('postulante', $postulante);

        return response()->json([
            'rutaAFormulario' => $nombreFinal,
        ]);
    }

    public function deleteCurriculumVitae(Request $request)
    {
        $postulante = session()->get('postulante');

        // comprobar si el postulante existe
        if (!$postulante) {
            return response()->json([
                'mensaje' => 'No se ha encontrado el postulante',
            ]);
        }

        $postulante = Postulante::findOrFail($postulante->id);

        // eliminar el archivo del directorio
        Storage::delete('public/curriculum_vitae/' . $postulante->curriculum_vitae);

        // actualizar el curriculum vitae del postulante
        $postulante->curriculum_vitae = null;
        $postulante->save();

        // guardar el postulante en la sesión
        session()->put('postulante', $postulante);

        return response()->json([
            'mensaje' => 'El curriculum vitae ha sido eliminado',
        ]);
    }

    public function deleteCartaSolicitud(Request $request)
    {
        $postulante = session()->get('postulante');

        // comprobar si el postulante existe
        if (!$postulante) {
            return response()->json([
                'mensaje' => 'No se ha encontrado el postulante',
            ]);
        }

        $postulante = Postulante::findOrFail($postulante->id);

        // eliminar el archivo del directorio
        Storage::delete('public/carta_solicitud/' . $postulante->carta_solicitud);

        // actualizar la carta de solicitud del postulante
        $postulante->carta_solicitud = null;
        $postulante->save();

        // guardar el postulante en la sesión
        session()->put('postulante', $postulante);

        return response()->json([
            'mensaje' => 'La carta de solicitud ha sido eliminada',
        ]);
    }

    public function deleteFotocopiaCarnetIdentidad(Request $request)
    {
        $postulante = session()->get('postulante');

        // comprobar si el postulante existe
        if (!$postulante) {
            return response()->json([
                'mensaje' => 'No se ha encontrado el postulante',
            ]);
        }

        $postulante = Postulante::findOrFail($postulante->id);

        // eliminar el archivo del directorio
        Storage::delete('public/fotocopia_carnet_identidad/' . $postulante->fotocopia_carnet_identidad);

        // actualizar la fotocopia del carnet de identidad del postulante
        $postulante->fotocopia_carnet_identidad = null;
        $postulante->save();

        // guardar el postulante en la sesión
        session()->put('postulante', $postulante);

        return response()->json([
            'mensaje' => 'La fotocopia del carnet de identidad ha sido eliminada',
        ]);
    }

    public function deleteAvanceAcademico(Request $request)
    {
        $postulante = session()->get('postulante');

        // comprobar si el postulante existe
        if (!$postulante) {
            return response()->json([
                'mensaje' => 'No se ha encontrado el postulante',
            ]);
        }

        $postulante = Postulante::findOrFail($postulante->id);

        // eliminar el archivo del directorio
        Storage::delete('public/avance_academico/' . $postulante->avance_academico);

        // actualizar el avance académico del postulante
        $postulante->avance_academico = null;
        $postulante->save();

        // guardar el postulante en la sesión
        session()->put('postulante', $postulante);

        return response()->json([
            'mensaje' => 'El avance académico ha sido eliminado',
        ]);
    }

    public function deleteFormulario(Request $request)
    {
        $postulante = session()->get('postulante');

        // comprobar si el postulante existe
        if (!$postulante) {
            return response()->json([
                'mensaje' => 'No se ha encontrado el postulante',
            ]);
        }

        $postulante = Postulante::findOrFail($postulante->id);

        // eliminar el archivo del directorio
        Storage::delete('public/formulario/' . $postulante->formulario);

        // actualizar el formulario del postulante
        $postulante->formulario = null;
        $postulante->save();

        // guardar el postulante en la sesión
        session()->put('postulante', $postulante);

        return response()->json([
            'mensaje' => 'El formulario ha sido eliminado',
        ]);
    }


    public function show($id)
    {
        $postulante = Postulante::findOrFail($id);

        return view('pages.postulante.show', compact('postulante'));
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
