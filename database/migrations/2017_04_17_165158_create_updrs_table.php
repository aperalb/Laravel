<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('updrs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->boolean('estado');
            $table->float('dosis_supramaxima');
            $table->integer('talla');
            $table->float('peso');
            $table->boolean('donante');
            $table->float('tension_arterial');
            $table->unsignedInteger('modelo_id');
            $table->foreign('modelo_id')->references('id')->on('modelo formularios')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('updrs');
    }
}
