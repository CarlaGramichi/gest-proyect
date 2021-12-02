<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id('id_proyecto');
            $table->unsignedBigInteger('id_estado');
            $table->unsignedBigInteger('id_responsable');
            $table->string('nombre',120);
            $table->string('fecha_inicio',120)->nullable();
            $table->string('fecha_fin',120)->nullable();
            $table->text('descripcion',250);
            $table->timestamps();

            $table->foreign('id_responsable')->references('id')->on('users');
            $table->foreign('id_estado')->references('id_estado')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
