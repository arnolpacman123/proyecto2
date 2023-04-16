<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create([
            'sigla' => 'SA',
        ]);
        Grupo::create([
            'sigla' => 'SB',
        ]);
        Grupo::create([
            'sigla' => 'SC',
        ]);
        Grupo::create([
            'sigla' => 'XY',
        ]);
        Grupo::create([
            'sigla' => 'XW',
        ]);
        Grupo::create([
            'sigla' => 'Z1',
        ]);
        Grupo::create([
            'sigla' => 'Z2',
        ]);
        Grupo::create([
            'sigla' => 'Z3',
        ]);
        Grupo::create([
            'sigla' => 'Z4',
        ]);
        Grupo::create([
            'sigla' => 'Z5',
        ]);
    }
}
