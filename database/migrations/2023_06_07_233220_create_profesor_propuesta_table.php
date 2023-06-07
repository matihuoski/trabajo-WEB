<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Profesor_Propuesta', function (Blueprint $table) {
            $table->integer('propuesta_id');
            $table->string('profesor_rut', 10);
            $table->date('fecha');
            $table->time('hora');
            $table->text('comentario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Profesor_Propuesta');
    }
};