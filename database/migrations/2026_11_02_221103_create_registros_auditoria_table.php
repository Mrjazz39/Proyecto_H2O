<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('registros_auditoria', function (Blueprint $table) {
            $table->id();

            $table->foreignId('usuario_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->string('accion', 40); // crear, modificar, eliminar, consultar
            $table->string('tipo_entidad', 80); // reporte, categoria, usuario, etc.
            $table->unsignedBigInteger('entidad_id')->nullable();

            $table->json('campos_modificados')->nullable();
            $table->json('valores_anteriores')->nullable();
            $table->json('valores_nuevos')->nullable();

            $table->string('resultado', 30)->default('completado');
            $table->timestamp('creado_en')->useCurrent();

            $table->index(['usuario_id', 'creado_en']);
            $table->index(['tipo_entidad', 'entidad_id']);
            $table->index(['accion', 'creado_en']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registros_auditoria');
    }
};