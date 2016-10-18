<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias_alumnos', function (Blueprint $table) {
            $table->string('cedula',15);
            $table->string('seccion',10);
            $table->date('dia_laboral');
            $table->primary(['cedula','seccion','dia_laboral']);
            $table->foreign('cedula')->references('cedula')->on('alumnos')->onDelete('cascade');
            $table->foreign('seccion')->references('nombre')->on('secciones')->onDelete('cascade');
            $table->foreign('dia_laboral')->references('fecha')->on('dias_laborales')->onDelete('cascade');
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
        Schema::dropIfExists('asistencias_alumnos');
    }
}
