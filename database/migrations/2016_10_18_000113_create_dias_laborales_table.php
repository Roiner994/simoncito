<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiasLaboralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dias_laborales', function (Blueprint $table) {
            $table->date('fecha');
            $table->integer('periodo_escolar')->unsigned();
            $table->enum('en_aula',['si','no']);
            $table->primary(['fecha','periodo_escolar']);
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
        Schema::dropIfExists('dias_laborales');
    }
}
