<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosReporteSeeder extends Seeder
{
    public function run(): void
    {
        $fecha = now();

        DB::table('estados_reporte')->insertOrIgnore([
            [
                'nombre' => 'Reportado',
                'descripcion' => 'El reporte fue enviado correctamente y está registrado.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
        ]);
    }
}