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
        Schema::create('clases_cursos', function (Blueprint $table) {
            $table->integer('id_clase_curso')->autoIncrement();
            $table->integer('id_detalle_categoria_curso');
            $table->string('nombre_clase', 100);
            $table->string('descripcion_clase', 100);
            $table->string('imagen_clase', 100);
            $table->string('url_clase', 100);
            $table->foreign('id_detalle_categoria_curso')->references('id_detalle_categoria_curso')->on('detalle_categoria_cursos');
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
        Schema::dropIfExists('clases_cursos');
    }
};
