<?php

namespace Database\Seeders;

use App\Models\Juego;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $juego1 = new Juego();
        $juego1->nombre = 'De 3 a 6 año 1º, 2º y 3º Infantil';
        $juego1->imagen = 'http://localhost:8000/images/juegos/imagen1.jpeg';
        $juego1->enlace = 'https://www.cristic.com/1o-2o-y-3o-infantil';
        $juego1->save();

        $juego2 = new Juego();
        $juego2->nombre = 'De 6 a 8 año 1º, 2º  Primaria';
        $juego2->imagen = 'http://localhost:8000/images/juegos/imagen2.jpeg';
        $juego2->enlace = 'https://www.cristic.com/1o-y-2o-de-primaria';
        $juego2->save();

        $juego3 = new Juego();
        $juego3->nombre = 'De 8 a 10 año 3º, 4º  Primaria';
        $juego3->imagen = 'http://localhost:8000/images/juegos/imagen3.jpeg';
        $juego3->enlace = 'https://www.cristic.com/3o-y-4o-primaria';
        $juego3->save();

        $juego4 = new Juego();
        $juego4->nombre = 'De 10 a 12 año 5º, 6º  Primaria';
        $juego4->imagen = 'http://localhost:8000/images/juegos/imagen4.jpeg';
        $juego4->enlace = 'https://www.cristic.com/5o-y-6o-de-primaria';
        $juego4->save();

    }
}
