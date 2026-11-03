<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('archivos_reporte', function (Blueprint $table) {
            $table->id();

            $table->foreignId('reporte_id')
                ->constrained('reportes')
                ->cascadeOnDelete();

            $table->string('tipo_archivo', 20); // imagen o video
            $table->string('ruta_almacenamiento', 500);
            $table->string('tipo_mime', 100);
            $table->unsignedBigInteger('tamano_bytes');
            $table->unsignedSmallInteger('duracion_segundos')->nullable();
            $table->timestamp('creado_en')->useCurrent();

            $table->index(['reporte_id', 'creado_en']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('archivos_reporte');
    }
};