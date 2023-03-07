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
        Schema::create('difusion', function (Blueprint $table) {
            $table->integer('id_difusion')->autoIncrement();
            $table->string('titulo', 100);
            $table->string('imagen', 100);
            $table->integer('id_tipo_difusion');
            $table->foreign('id_tipo_difusion')->references('id_tipo_difusion')->on('tipo_difusion');
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
        Schema::dropIfExists('difusions');
    }
};
