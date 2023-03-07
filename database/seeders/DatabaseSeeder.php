<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            /*TipoDifusionSeeder::class,
            DifusionSeeder::class,
            DetalleDifusionSeeder::class,*/
            JuegoSeeder::class,
        ]);
    }
}
