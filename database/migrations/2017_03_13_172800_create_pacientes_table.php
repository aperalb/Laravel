<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('dni');
            $table->string('nuhsa');
            $table->date('fechaNac');
            $table->unsignedInteger('fechaInicioPD');
            $table->string('sintomasMotores');
            $table->string('sintomasCognitivos');
            $table->string('observaciones');
            $table->unsignedInteger('medico_id');
            $table->foreign('medico_id')->references('id')->on('medicos')->onDelete('cascade');        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
