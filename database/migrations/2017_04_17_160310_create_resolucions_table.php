<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResolucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resolucions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            /** Nullables, correspondientes a UPDRS, si procede:
            */
            $table->string('estado')->nullable();
            $table->string('latencia')->nullable();
            $table->string('video')->nullable();
            $table->string('foto')->nullable();
            $table->float('talla')->nullable();
            $table->float('peso')->nullable();
            $table->string('donante')->nullable();
            $table->float('tension')->nullable();


            /**
             * */

            $table->unsignedInteger('formulario_id');
            $table->unsignedInteger('paciente_id');
            $table->foreign('formulario_id')->references('id')->on('formularios')->onDelete('cascade');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resolucions');
    }
}
