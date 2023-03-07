<?php

namespace Database\Seeders;

use App\Models\Difusion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DifusionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $difusion1 = new Difusion();
        $difusion1->titulo = 'Derechos y deberes de los estudiantes';
        $difusion1->imagen = 'http://localhost:8000/images/deberes_estudiante.png';
        $difusion1->id_tipo_difusion = 1;
        $difusion1->save();

        $difusion2 = new Difusion();
        $difusion2->titulo = 'Derechos de los representantes de los estudiantes';
        $difusion2->imagen = 'http://localhost:8000/images/derechos_representantes.png';
        $difusion2->id_tipo_difusion = 1;
        $difusion2->save();

        $difusion3 = new Difusion();
        $difusion3->titulo = 'Valores dentro del aula ';
        $difusion3->imagen = 'http://localhost:8000/images/valores_dentro_aula.png';
        $difusion3->id_tipo_difusion = 1;
        $difusion3->save();
    }
}
