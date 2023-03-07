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
        Schema::create('difusion_detalles', function (Blueprint $table) {
            $table->integer('id_difusion_detalle')->autoIncrement();
            $table->text('descripcion');
            $table->text('imagen');
            $table->integer('id_difusion');
            $table->foreign('id_difusion')->references('id_difusion')->on('difusion');
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
        Schema::dropIfExists('difusion_detalles');
    }
};
