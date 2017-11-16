<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class AddContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
             
            $table->increments('id');
            $table->string('fondos_origen');
            $table->integer('indicador');
            $table->double('monto',8,2);
            $table->integer('duracion');
            $table->enum('estado',['finalizado'],['activo'],['proximo']);
            $table->string('tipo');
            $table->string('actividad');
            $table->date('desde');
            $table->date('hasta');
            $table->integer('empleado_id')->unsigned();

            $table->foreign('empleado_id')->references('id')->on('empleados');
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
        Schema::dropIfExists('contratos');
    }
}
