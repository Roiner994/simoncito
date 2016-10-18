<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuplenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suplencias', function (Blueprint $table) {
            $table->date('dia_laboral');
            $table->string('suplente',15);
            $table->string('suplantado',15);          
            $table->primary(['dia_laboral','suplente','suplantado']);
            $table->foreign('dia_laboral')->references('fecha')->on('dias_laborales')->onDelete('cascade');
            $table->foreign('suplente')->references('cedula')->on('empleados')->onDelete('cascade');
            $table->foreign('suplantado')->references('cedula')->on('empleados')->onDelete('cascade');
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
        Schema::dropIfExists('suplencias');
    }
}
