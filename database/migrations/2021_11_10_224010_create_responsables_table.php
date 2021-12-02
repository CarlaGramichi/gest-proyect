<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->id('id_responsable');
            $table->string('nombre',250);
            $table->string('apellido',250);
            $table->string('email',250);
            $table->string('contrasena',250);
            $table->string('fecha_inicio');
            $table->string('image', 120);
            $table->unsignedBigInteger('id_estado');
            $table->timestamps();

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
        Schema::dropIfExists('responsables');
    }
}
