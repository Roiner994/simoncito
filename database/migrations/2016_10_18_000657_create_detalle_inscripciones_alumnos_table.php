<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleInscripcionesAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_inscripciones', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->integer('inscripcion_id')->unsigned();
            $table->string('alumno',15)->unique();
            $table->primary(['id','inscripcion_id','alumno']);
            $table->string('representante',15);
            $table->enum('partida_nacimiento',['si','no']);
            $table->enum('certificado_vacunas',['si','no']);
            $table->enum('carta_residencia',['si','no']);
            $table->enum('constancia_trabajo',['si','no']);
            $table->enum('copia_cedula_madre',['si','no']);
            $table->enum('foto',['si','no']);
            $table->foreign('inscripcion_id')->references('id')->on('inscripciones')->onDelete('cascade');
            $table->foreign('alumno')->references('cedula')->on('alumnos')->onDelete('cascade');
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
        Schema::dropIfExists('detalle_inscripciones');
    }
}
