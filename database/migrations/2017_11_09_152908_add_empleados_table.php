<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {

            $table->increments('id');
            $table->bigInteger('dni')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('programa_id')->unsigned();
            $table->integer('distribution_id')->unsigned(); /*unsigned es para setear el campo de la tabla*/

            $table->foreign('distribution_id')->references('id')->on('distributions');
            $table->foreign('programa_id')->references('id')->on('programas');


            $table->timestamps();
        });

        Schema::create('contrato_empleado', function (Blueprint $table){
           $table->increments('id');
           $table->integer('empleado_id')->unsigned();
           $table->integer('contrato_id')->unsigned();

           $table->foreign('empleado_id')->references('id')->on('empleados');
           $table->foreign('contrato_id')->references('id')->on('contratos');

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
        Schema::dropIfExists('empleados');
    }
}
