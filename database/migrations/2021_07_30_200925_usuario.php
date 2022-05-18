<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('genero');
            $table->string('password');
            $table->string('email');
            $table->string('telefone');
            $table->datetime('data_nascimento');
            $table->UnsignedbigInteger('id_tipo');
            $table->timestamps();
            $table->foreign('id_tipo')->references('id')->on('tipos')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('usuarios');
    }
}
