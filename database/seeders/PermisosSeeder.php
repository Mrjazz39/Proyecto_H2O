<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermisosSeeder extends Seeder
{
    public function run(): void
    {
        $fecha = now();

        DB::table('permisos')->insertOrIgnore([
            [
                'clave' => 'reportes.crear',
                'descripcion' => 'Crear un reporte.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'clave' => 'reportes.consultar_propios',
                'descripcion' => 'Consultar los reportes propios.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'clave' => 'tablero_publico.consultar',
                'descripcion' => 'Consultar estadísticas públicas agregadas.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'clave' => 'reportes.consultar_todos',
                'descripcion' => 'Consultar la cola global de reportes.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'clave' => 'archivos.consultar',
                'descripcion' => 'Consultar archivos asociados a reportes autorizados.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'clave' => 'analisis_ia.consultar',
                'descripcion' => 'Consultar sugerencias de clasificación de IA.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'clave' => 'tablero_interno.consultar',
                'descripcion' => 'Consultar estadísticas del panel interno.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'clave' => 'usuarios.gestionar',
                'descripcion' => 'Gestionar cuentas y roles iniciales.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'clave' => 'auditoria.consultar',
                'descripcion' => 'Consultar registros de auditoría.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
        ]);
    }
}