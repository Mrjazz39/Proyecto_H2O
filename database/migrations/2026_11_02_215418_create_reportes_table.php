<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_publico', 30)->unique();

            $table->foreignId('ciudadano_id')
                ->constrained('users');

            $table->foreignId('area_id')
                ->nullable()
                ->constrained('areas')
                ->nullOnDelete();

            $table->foreignId('categoria_id')
                ->constrained('categorias');

            $table->foreignId('prioridad_id')
                ->nullable()
                ->constrained('prioridades')
                ->nullOnDelete();

            $table->foreignId('estado_id')
                ->constrained('estados_reporte');

            $table->text('descripcion');
            $table->string('metodo_ubicacion', 20);
            $table->decimal('latitud', 10, 7)->nullable();
            $table->decimal('longitud', 10, 7)->nullable();
            $table->string('direccion', 255)->nullable();
            $table->string('referencia_ubicacion', 255)->nullable();

            $table->timestamp('creado_en')->useCurrent();
            $table->timestamp('actualizado_en')->useCurrent()->useCurrentOnUpdate();

            $table->index(['ciudadano_id', 'creado_en']);
            $table->index(['estado_id', 'creado_en']);
            $table->index(['area_id', 'creado_en']);
            $table->index(['categoria_id', 'creado_en']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};