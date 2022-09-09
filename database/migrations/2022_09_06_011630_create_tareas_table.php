<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('Descripcion')->nullable();
            $table->tinyInteger('Finalizada')->default(0);
            $table->timestamp('Fecha limite');
            $table->tinyInteger('Urgencia')->comment('0: No es urgente, 1: Urgencia normal, 2: Muy urgente');
            $table->softDeletes();
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
        Schema::dropIfExists('tareas');
    }
}
