<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagemCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagem_carros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('imagem');
            $table->UnsignedBigInteger('id_carro');
            $table->timestamps();
            $table->foreign('id_carro')->references('id')->on('carros')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagem_carros');
    }
}
