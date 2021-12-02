<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareaResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarea_responsables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tarea');
            $table->unsignedBigInteger('id_responsable');
            $table->timestamps();

            $table->foreign('id_tarea')->references('id_tarea')->on('tareas');
            $table->foreign('id_responsable')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarea_responsables');
    }
}
