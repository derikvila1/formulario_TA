<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditaisEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('editais')->create('editais_enderecos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('edital');
            $table->foreign('edital')->references('id')->on('editais');
            $table->string('nome', '100');
            $table->string('descricao', '250')->nullable();
            $table->string('caminho', '100')->unique();
            $table->dateTime('publicacao');
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
        Schema::connection('editais')->dropIfExists('editais_enderecos');
    }
}
