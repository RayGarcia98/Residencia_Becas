<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formato', function (Blueprint $table) {
            $table->id();
            $table->string('Asunto',500)->nullable();
            $table->string('Fecha_elaboracion',500)->nullable();
            $table->string('Destinatario',500)->nullable();
            $table->string('Depto_destinatario',500)->nullable();
            $table->string('Cuerpo_texto',500)->nullable();
            $table->string('Remitente',500)->nullable();
            $table->string('Depto_Remitente',500)->nullable();
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
        Schema::dropIfExists('formato');
    }
}
