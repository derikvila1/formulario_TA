<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('editais')->create('editais', function (Blueprint $table) {
            $table->id();
            $table->Text('nome', 150);
            $table->unsignedBigInteger('estado');
            $table->foreign('estado')->references('id')->on('editais_estados');
            $table->text('descricao', 2000)->nullable();
            $table->dateTime('publicacao');
            $table->json('campos');
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
        Schema::connection('editais')->dropIfExists('editais');
    }
}
