<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioridadesSeeder extends Seeder
{
    public function run(): void
    {
        $fecha = now();

        DB::table('prioridades')->insertOrIgnore([
            [
                'nombre' => 'baja',
                'descripcion' => 'Prioridad baja.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'nombre' => 'media',
                'descripcion' => 'Prioridad media.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'nombre' => 'alta',
                'descripcion' => 'Prioridad alta.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'nombre' => 'critica',
                'descripcion' => 'Prioridad crítica.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
        ]);
    }
}