<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->string('cedula',15);
            $table->primary('cedula');
            $table->string('nombre',30);
            $table->string('segundo_nombre',30);
            $table->string('apellido',40);
            $table->string('segundo_apellido',40);
            $table->string('lugar_nacimiento',100);
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->string('ocupacion',20);
            $table->string('direccion',100);
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
        Schema::dropIfExists('personas');
    }
}
