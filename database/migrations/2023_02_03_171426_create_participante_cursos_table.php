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
        Schema::create('participante_cursos', function (Blueprint $table) {
            $table->integer('id_participante_curso')->autoIncrement();
            $table->integer('id_curso');
            $table->integer('id_usuario');
            $table->timestamps();
            $table->foreign('id_curso')->references('id_curso')->on('cursos');
            $table->foreign('id_usuario')->references('id_usuario')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participante_cursos');
    }
};
