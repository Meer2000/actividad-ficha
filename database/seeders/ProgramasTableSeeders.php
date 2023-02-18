<?php

namespace Database\Seeders;

use App\Models\Programa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramasTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Programa::create([
        'nombre'=>'Mantenimiento de equipos'
        ]);
        Programa::create([
            'nombre'=>'ADSO'
        ]);
        Programa::create([
            'nombre'=>'Electricidad industrial'
        ]);
        Programa::create([
            'nombre'=>'Gestion de Redes'
        ]);
        Programa::create([
            'nombre'=>'Diseño Grafico'
        ]);
        Programa::create([
            'nombre'=>'Telecomunicaciones'
        ]);
    }
}
