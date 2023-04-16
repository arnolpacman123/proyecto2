<?php

namespace Database\Seeders;

use App\Models\Convocatoria;
use App\Models\Materia;
use App\Models\MateriaConvocada;
use App\Models\Periodo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConvocatoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $periodos = Periodo::all();
        $materiasAll = Materia::all();
        $periodos->each(function ($periodo) use ($materiasAll) {
            // get number of month of fecha_inicio
            $month = (int)$periodo->fecha_inicio->format('m');
            $ano = $periodo->ano;

            $convocatoria = Convocatoria::create([
                'numero_convocatoria' => uniqid(),
                'descripcion' => "Convocatoria para el periodo $periodo->numero/$ano",
                'fecha_inicio' => "$ano-$month-01",
                'fecha_fin' => "$ano-$month-14",
                'estado' => false,
                'periodo_id' => $periodo->id,
            ]);
            $convocatoria->save();

            // obtener aleatoriamente varias materias
            $materias = $materiasAll->random(30);
            // asignar las materias a la convocatoria
            $materias->each(function ($materia) use ($convocatoria) {
                MateriaConvocada::create([
                    'convocatoria_id' => $convocatoria->id,
                    'materia_id' => $materia->id,
                ]);
            });

            $convocatoria = Convocatoria::create([
                'numero_convocatoria' => uniqid(),
                'descripcion' => "Convocatoria para el periodo $periodo->numero/$ano",
                'fecha_inicio' => "$ano-$month-15",
                'fecha_fin' => "$ano-$month-28",
                'estado' => false,
                'periodo_id' => $periodo->id,
            ]);
            $convocatoria->save();

            // obtener aleatoriamente varias materias
            $materias = $materias->random(10);
            // asignar las materias a la convocatoria
            $materias->each(function ($materia) use ($convocatoria) {
                MateriaConvocada::create([
                    'materia_id' => $materia->id,
                    'convocatoria_id' => $convocatoria->id,
                ]);
            });
        });
    }
}
