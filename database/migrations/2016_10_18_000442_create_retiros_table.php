<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retiros', function (Blueprint $table) {
            $table->string('cedula',15);
            $table->date('dia_laboral');
            $table->primary(['cedula','dia_laboral']);
            $table->text('observacion');
            $table->foreign('cedula')->references('cedula')->on('alumnos')->onDelete('cascade');
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
        Schema::dropIfExists('retiros');
    }
}
