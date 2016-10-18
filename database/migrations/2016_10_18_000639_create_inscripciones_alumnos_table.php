<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionesAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->integer('periodo_escolar')->unsigned();
            $table->primary(['id','periodo_escolar']);
            $table->string('empleado',15);
            $table->string('seccion',10);
            $table->date('fecha');
            $table->integer('alumnos')->unsigned();
            $table->foreign('periodo_escolar')->references('id')->on('periodos_escolares')->onDelete('cascade');
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
        Schema::dropIfExists('inscripciones');
    }
}
