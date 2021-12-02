<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_tareas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_proyecto');
            $table->unsignedBigInteger('id_tarea');
            $table->timestamps();

            $table->foreign('id_proyecto')->references('id_proyecto')->on('proyectos');
            $table->foreign('id_tarea')->references('id_tarea')->on('tareas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto_tareas');
    }
}
