<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricula')->unique();
            $table->text('descricao');
            $table->double('preco');
            $table->unsignedBigInteger('id_modelo');
            $table->unsignedBigInteger('localizacao');
            $table->string('cor');
            $table->string('imagem');
            $table->unsignedBigInteger('tipo');
            $table->timestamps();
            $table->foreign('tipo')->references('id')->on('tipocarros')->onDelete('CASCADE');
            $table->foreign('id_modelo')->references('id')->on('modelos')->onDelete('CASCADE');
            $table->foreign('localizacao')->references('id')->on('bairros')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carros');
    }
}
