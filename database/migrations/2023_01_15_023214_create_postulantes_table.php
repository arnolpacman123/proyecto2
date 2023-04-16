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
        Schema::create('postulantes', function (Blueprint $table) {
            $table->id();
            $table->string('curriculum_vitae')->nullable();
            $table->string('carta_solicitud')->nullable();
            $table->string('fotocopia_carnet_identidad')->nullable();
            $table->string('avance_academico')->nullable();
            $table->string('formulario')->nullable();
            $table->boolean('estado')->default(true);
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->foreignId('materia_convocada_id')->constrained('materias_convocadas');
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
        Schema::dropIfExists('postulantes');
    }
};
