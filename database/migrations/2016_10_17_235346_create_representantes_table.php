<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representantes', function (Blueprint $table) {
            $table->string('cedula',15);
            $table->primary('cedula');
            $table->enum('otros_niños', ['si','no']);
            $table->enum('dispuesto_colborar',['si','no']);
            $table->integer('parentesco_id')->unsigned();
            $table->foreign('cedula')->references('cedula')->on('personas')->onDelete('cascade');
            $table->foreign('parentesco_id')->references('id')->on('parentescos');
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
        Schema::dropIfExists('representantes');
    }
}
