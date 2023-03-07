<?php

namespace Database\Seeders;

use App\Models\TipoDifusion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDifusionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $docente = new TipoDifusion();
        $docente->nombre = 'Docente';
        $docente->save();
        $estudiante = new TipoDifusion();
        $estudiante->nombre = 'Estudiante';
        $estudiante->save();
    }
}
