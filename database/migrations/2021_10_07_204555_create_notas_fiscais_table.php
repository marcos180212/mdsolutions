<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasFiscaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas_fiscais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('numero');
            $table->date('emissao');
            $table->string('colaborador');
            $table->float('icms');
            $table->float('ipi');
            $table->float('frete');
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
        Schema::dropIfExists('notas_fiscais');
    }
}
