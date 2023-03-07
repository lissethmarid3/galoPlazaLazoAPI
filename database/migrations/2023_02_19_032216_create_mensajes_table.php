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
        Schema::create('mensajes', function (Blueprint $table) {
            $table->integer('id_mensaje')->autoIncrement();
            $table->integer('user_id_destinatario');
            $table->integer('user_id_remitente');
            $table->string('mensaje', 100);
            $table->boolean('leido')->default(false);
            $table->foreign('user_id_destinatario')->references('id_usuario')->on('users');
            $table->foreign('user_id_remitente')->references('id_usuario')->on('users');
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
        Schema::dropIfExists('mensajes');
    }
};
