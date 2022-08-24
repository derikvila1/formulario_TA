<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   
        Schema::create('formulario', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('nome');
            $table->string('contato');
            $table->string('email');
            $table->string('pais');
            $table->string('cidade');
            $table->string('cafe_atendimento');
            $table->string('cafe_variedade');
            $table->string('cafe_cordialidade');
            $table->string('cafe_valores');
            $table->string('loja_atendimento');
            $table->string('loja_variedade');
            $table->string('loja_cordialidade');
            $table->string('loja_valores');
            $table->string('bilheteria_atendimento');
            $table->string('bilheteria_eficiencia');
            $table->string('bilheteria_cordialidade');
            $table->string('condutores_cordialidade');
            $table->string('condutores_postura');
            $table->string('condutores_contex');
            $table->string('condutores_valores');
            $table->string('instalacoes_conforto');
            $table->string('instalacoes_sinalizacao');
            $table->string('instalacoes_limpeza');
            $table->string('instalacoes_conservacao');
            $table->string('criticas_elogios')->nullable();
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
        Schema::dropIfExists('formulario');
    }
};
