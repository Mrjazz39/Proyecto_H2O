<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('historial_estados_reporte', function (Blueprint $table) {
            $table->id();

            $table->foreignId('reporte_id')
                ->constrained('reportes');

            $table->foreignId('cambiado_por_usuario_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->foreignId('estado_anterior_id')
                ->nullable()
                ->constrained('estados_reporte');

            $table->foreignId('estado_nuevo_id')
                ->constrained('estados_reporte');

            $table->string('nota', 500)->nullable();
            $table->timestamp('creado_en')->useCurrent();

            $table->index(['reporte_id', 'creado_en']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('historial_estados_reporte');
    }
};