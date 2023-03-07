<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->integer('id_persona')->autoIncrement();
            $table->string('dni', 13)->unique();
            $table->string('nombre_persona', 50);
            $table->string('apellido_persona', 50);
            $table->string('telefono_persona', 50);
            $table->string('direccion_persona', 50);
            $table->string('ciudad_persona', 50);
            $table->string('estado_persona', 4);
            $table->string('pais_persona', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
