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
        Schema::create('habilitacao_editais', function (Blueprint $table) {
            $table->id();
            $table->integer('quem_habilitou');
            $table->integer('qual_edital');
            $table->integer('qual_projeto');
            $table->string('estado');
            $table->timestamps();
            $table->string('observacao','100');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habilitacao_editais');
    }
};
