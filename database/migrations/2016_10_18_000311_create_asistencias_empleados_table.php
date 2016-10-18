<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias_empleados', function (Blueprint $table) {
            $table->string('cedula',15);
            $table->date('dia_laboral_fecha');
            $table->primary(['cedula','dia_laboral_fecha']);
            $table->enum('presente',['si','no']);
            $table->text('observacion');
            $table->foreign('cedula')->references('cedula')->on('empleados')->onDelete('cascade');
            $table->foreign('dia_laboral_fecha')->references('fecha')->on('dias_laborales')->onDelete('cascade');
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
        Schema::dropIfExists('asistencias_empleados');
    }
}
