<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    public function run(): void
    {
        $fecha = now();

        DB::table('categorias')->insertOrIgnore([
            [
                'nombre' => 'Fuga de agua',
                'descripcion' => 'Pérdida visible de agua en una tubería o conexión.',
                'activa' => true,
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'nombre' => 'Tubería dañada',
                'descripcion' => 'Tubería rota, expuesta o con daño visible.',
                'activa' => true,
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'nombre' => 'Baja presión',
                'descripcion' => 'Flujo de agua con presión menor a la habitual.',
                'activa' => true,
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'nombre' => 'Inundación',
                'descripcion' => 'Acumulación o desbordamiento de agua en un área.',
                'activa' => true,
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'nombre' => 'Otro',
                'descripcion' => 'Problema relacionado con agua que no corresponde a otra categoría.',
                'activa' => true,
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
        ]);
    }
}