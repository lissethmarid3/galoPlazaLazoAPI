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
        Schema::create('detalle_categoria_cursos', function (Blueprint $table) {
            $table->integer('id_detalle_categoria_curso')->autoIncrement();
            $table->integer('id_curso');
            $table->integer('id_categoria_curso');
            $table->foreign('id_curso')->references('id_curso')->on('cursos');
            $table->foreign('id_categoria_curso')->references('id_categoria_curso')->on('categoria_cursos');
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
        Schema::dropIfExists('detalle_categoria_cursos');
    }
};
