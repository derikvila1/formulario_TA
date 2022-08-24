<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditaisInscritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('editais')->create('editais_inscricoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cadastro_estadual');
            $table->json('inscricao');
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
        Schema::connection('editais')->dropIfExists('editais_inscricoes');
    }
}
