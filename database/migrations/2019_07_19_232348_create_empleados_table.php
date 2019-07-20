<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idPuesto')->unsigned();
            $table->foreign('idPuesto')->references('id')->on('cat_puestos')->onDelete('cascade');
            $table->bigInteger('idCargo')->unsigned();
            $table->foreign('idCargo')->references('id')->on('cat_cargos')->onDelete('cascade');
            $table->bigInteger('idArea')->unsigned();
            $table->foreign('idArea')->references('id')->on('cat_areas')->onDelete('cascade');
            $table->string('nombres');
            $table->string('primerAp');
            $table->string('segundoAp');
            $table->string('sexo');

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
