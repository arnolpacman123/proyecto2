<?php

namespace Database\Seeders;

use App\Models\TipoUsuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        TipoUsuario::create([
            'nombre_tipo' => 'Rector',
            'numero_tipo' => 1,
        ]);
        TipoUsuario::create([
            'nombre_tipo' => 'Vicerrector',
            'numero_tipo' => 2,
        ]);
        TipoUsuario::create([
            'nombre_tipo' => 'Decano',
            'numero_tipo' => 3,
        ]);
        TipoUsuario::create([
            'nombre_tipo' => 'Vicedecano',
            'numero_tipo' => 4,
        ]);
        TipoUsuario::create([
            'nombre_tipo' => 'Docente',
            'numero_tipo' => 5,
        ]);
        TipoUsuario::create([
            'nombre_tipo' => 'Estudiante',
            'numero_tipo' => 6,
        ]);
    }
}
