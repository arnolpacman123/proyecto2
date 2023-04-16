<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargas_horarias', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('horas_asignadas');
            $table->foreignId('formulario_id')->constrained('formularios');
            $table->foreignId('grupo_materia_id')->constrained('grupos_materias');
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
        Schema::dropIfExists('cargas_horarias');
    }
};
