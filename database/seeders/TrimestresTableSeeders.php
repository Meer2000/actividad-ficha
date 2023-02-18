<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Trimestre;
use Illuminate\Database\Seeder;

class TrimestresTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   Trimestre::create([
          'nombre'=>'Timestre I']);
        Trimestre::create([
            'nombre'=>'Timestre II']);
        Trimestre::create([
            'nombre'=>'Timestre III']);
        Trimestre::create([
            'nombre'=>'Timestre IV']);
        Trimestre::create([
            'nombre'=>'Timestre V']);
        Trimestre::create([
            'nombre'=>'Timestre VI']);
        Trimestre::create([
            'nombre'=>'Timestre VII']);
        Trimestre::create([
            'nombre'=>'Timestre VIII']);

    }
}
