<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncargadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encargados', function (Blueprint $table) {
            $table->string('cedula',15);
            $table->string('seccion',10);
            $table->integer('periodo_escolar')->unsigned();
            $table->primary(['cedula','seccion','periodo_escolar']);
            $table->foreign('cedula')->references('cedula')->on('empleados')->onDelete('cascade');
            $table->foreign('seccion')->references('nombre')->on('secciones')->onDelete('cascade');
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
        Schema::dropIfExists('encargados');
    }
}
