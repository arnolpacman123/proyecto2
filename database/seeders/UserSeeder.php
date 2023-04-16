<?php

namespace Database\Seeders;

use App\Models\TipoUsuario;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoUsuarioEstudiante = TipoUsuario::where('nombre_tipo', 'Estudiante')->first();
        $tipoUsuarioDocente = TipoUsuario::where('nombre_tipo', 'Docente')->first();
        foreach (range(1, 100) as $ignored) {
            $faker = Faker::create();
            User::create([
//                usa faker para generar nombres y apellidos
                'nombres' => $faker->firstName,
                'apellidos' => $faker->lastName,
//                genera un número único entre 212000000 y 222000000
                'numero_registro' => "" . $faker->unique()->numberBetween(212000000, 222000000),
                'contrasena' => Hash::make('12345678'),
                'tipo_usuario_id' => $tipoUsuarioEstudiante->id,
            ]);
        }
        foreach (range(1, 50) as $ignored) {
            $faker = Faker::create();
            User::create([
                'nombres' => $faker->firstName,
                'apellidos' => $faker->lastName,
                'numero_registro' => "" . $faker->unique()->numberBetween(212000000, 222000000),
                'contrasena' => Hash::make('12345678'),
                'tipo_usuario_id' => $tipoUsuarioDocente->id,
            ]);
        }
    }
}
