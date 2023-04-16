<?php

namespace Database\Seeders;

use App\Models\Convocatoria;
use App\Models\Postulante;
use App\Models\TipoUsuario;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostulanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $convocatorias = Convocatoria::all();
        $tipoUsuario = TipoUsuario::where('nombre_tipo', 'Estudiante')->first();
        $estudiantesAll = User::where('tipo_usuario_id', $tipoUsuario->id)->get();

        $convocatorias->each(function ($convocatoria) use ($estudiantesAll) {
            $materiasConvocadas = $convocatoria->materiasConvocadas;
            $materiasConvocadas->each(function ($materiaConvocada) use ($estudiantesAll) {
                $estudiantes = $estudiantesAll->random(5);
                $estudiantes->each(function ($estudiante) use ($materiaConvocada) {
                    Postulante::create([
                        'materia_convocada_id' => $materiaConvocada->id,
                        'usuario_id' => $estudiante->id,
                        'curriculum_vitae' => 'curriculum_vitae.pdf',
                        'carta_solicitud' => 'carta_solicitud.pdf',
                        'fotocopia_carnet_identidad' => 'fotocopia_carnet_identidad.pdf',
                        'avance_academico' => 'avance_academico.pdf',
                    ]);
                });
            });
        });
    }
}
