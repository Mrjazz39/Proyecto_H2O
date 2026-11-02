<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_padre_id')
                ->nullable()
                ->constrained('areas')
                ->nullOnDelete();

            $table->string('nombre', 120);
            $table->string('tipo_area', 50);
            $table->boolean('activa')->default(true);
            $table->timestamp('creado_en')->useCurrent();
            $table->timestamp('actualizado_en')->useCurrent()->useCurrentOnUpdate();

            $table->unique(['area_padre_id', 'nombre']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};