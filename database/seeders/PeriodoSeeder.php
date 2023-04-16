<?php

namespace Database\Seeders;

use App\Models\Periodo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Periodo::create([
            'numero' => 1,
            'ano' => 2019,
            'nombre' => 'Primer periodo',
            'fecha_inicio' => '2019-01-01',
            'fecha_fin' => '2019-06-30',
            'estado_en_curso' => false,
        ]);
        Periodo::create([
            'numero' => 2,
            'ano' => 2019,
            'nombre' => 'Segundo periodo',
            'fecha_inicio' => '2019-06-01',
            'fecha_fin' => '2019-12-31',
            'estado_en_curso' => false,
        ]);Periodo::create([
            'numero' => 1,
            'ano' => 2020,
            'nombre' => 'Primer periodo',
            'fecha_inicio' => '2020-01-01',
            'fecha_fin' => '2020-06-30',
            'estado_en_curso' => false,
        ]);
        Periodo::create([
            'numero' => 2,
            'ano' => 2020,
            'nombre' => 'Segundo periodo',
            'fecha_inicio' => '2020-06-01',
            'fecha_fin' => '2020-12-31',
            'estado_en_curso' => false,
        ]);Periodo::create([
            'numero' => 1,
            'ano' => 2021,
            'nombre' => 'Primer periodo',
            'fecha_inicio' => '2021-01-01',
            'fecha_fin' => '2021-06-30',
            'estado_en_curso' => false,
        ]);
        Periodo::create([
            'numero' => 2,
            'ano' => 2021,
            'nombre' => 'Segundo periodo',
            'fecha_inicio' => '2021-06-01',
            'fecha_fin' => '2021-12-31',
            'estado_en_curso' => false,
        ]);
        Periodo::create([
            'numero' => 1,
            'ano' => 2022,
            'nombre' => 'Primer periodo',
            'fecha_inicio' => '2022-01-01',
            'fecha_fin' => '2022-06-30',
            'estado_en_curso' => false,
        ]);
        Periodo::create([
            'numero' => 2,
            'ano' => 2022,
            'nombre' => 'Segundo periodo',
            'fecha_inicio' => '2022-06-01',
            'fecha_fin' => '2022-12-31',
            'estado_en_curso' => false,
        ]);
    }
}
