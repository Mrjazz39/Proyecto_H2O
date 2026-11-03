<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('analisis_ia', function (Blueprint $table) {
            $table->id();

            $table->foreignId('reporte_id')
                ->constrained('reportes')
                ->cascadeOnDelete();

            $table->foreignId('categoria_sugerida_id')
                ->nullable()
                ->constrained('categorias');

            $table->foreignId('prioridad_sugerida_id')
                ->nullable()
                ->constrained('prioridades');

            $table->decimal('confianza', 5, 4)->nullable();
            $table->string('estado_analisis', 20); // pendiente, completado o fallido
            $table->string('version_modelo', 80)->nullable();
            $table->timestamp('analizado_en')->nullable();
            $table->timestamp('creado_en')->useCurrent();

            $table->index(['reporte_id', 'creado_en']);
            $table->index(['estado_analisis', 'creado_en']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('analisis_ia');
    }
};