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
            $table->enum('estado',['ACTIVO'],['INACTIVO']);
            $table->enum('programa',['MDP'],['UEDP'],['PRODERI'],['PROICSA']);
            $table->integer('contrato_id')->unsigned(); /*unsigned es para setear el campo de la tabla*/
            $table->integer('distribution_id')->unsigned();

            $table->foreign('contrato_id')->references('id')->on('contratos');
            /*contrato_id de la tabla empleado hace referencia al campo id de la
            tabla contratos*/
            $table->foreign('distribution_id')->references('id')->on('distributions');
            /*
          $table->foreign('contrato_id')->references('id')->on('contratos')->onDelete('cascade');
          EN ESTE CASO ->ONDELETE('CASCADE') HACE Q CUANDO SE ELIMINE UN EMPLEADO SE ELIMINEN SUS CONTRATOS
          EN ESTE CASO NO SE BUSCA ESA FUNCION POR ESO NO SE LA USA
            */
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
