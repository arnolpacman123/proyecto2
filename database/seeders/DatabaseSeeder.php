<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            TipoUsuarioSeeder::class,
            UserSeeder::class,
            PeriodoSeeder::class,
            GrupoSeeder::class,
            MateriaSeeder::class,
            ConvocatoriaSeeder::class,
            GrupoMateriaSeeder::class,
            PostulanteSeeder::class,
        ]);
    }
}
