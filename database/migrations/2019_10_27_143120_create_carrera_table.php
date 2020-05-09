<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarreraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrera', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('adm_id')->unsigned();
            $table->foreign('adm_id')->references('id')->on('administrador')->onDelete('cascade');

            $table->string('nom_carrera');
            $table->string('lugar_salida');
            $table->string('lugar_llegada');
            $table->string('fecha_carr');
            $table->string('hora');
            $table->string('modalidad');
            $table->string('categoria');
            $table->string('monto');
            $table->string('kit_carrera'); 
            $table->string('foto')->nullable();         
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
        Schema::dropIfExists('carrera');
    }
}
