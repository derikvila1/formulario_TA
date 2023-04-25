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
            $table->string('cafe_atendimento')->nullable();
            $table->string('cafe_variedade')->nullable();
            $table->string('cafe_cordialidade')->nullable();
            $table->string('cafe_valores')->nullable();
            $table->string('loja_atendimento')->nullable();
            $table->string('loja_variedade')->nullable();
            $table->string('loja_cordialidade')->nullable();
            $table->string('loja_valores')->nullable();
            $table->string('bilheteria_atendimento')->nullable();
            $table->string('bilheteria_eficiencia')->nullable();
            $table->string('bilheteria_cordialidade')->nullable();
            $table->string('condutores_cordialidade')->nullable();
            $table->string('condutores_postura')->nullable();
            $table->string('condutores_contex')->nullable();
            $table->string('condutores_valores')->nullable();
            $table->string('instalacoes_conforto')->nullable();
            $table->string('instalacoes_sinalizacao')->nullable();
            $table->string('instalacoes_limpeza')->nullable();
            $table->string('instalacoes_conservacao')->nullable();
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
