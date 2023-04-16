<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoMateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materias = Materia::all();

        foreach ($materias as $materia) {
            $materia->grupos()->attach([
                rand(1, 10),
                rand(1, 10),
                rand(1, 10),
            ]);
        }
    }
}
