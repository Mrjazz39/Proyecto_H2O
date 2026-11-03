<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        $fecha = now();

        DB::table('roles')->insertOrIgnore([
            [
                'nombre' => 'ciudadano',
                'descripcion' => 'Persona que crea y consulta sus propios reportes.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'nombre' => 'personal_autorizado',
                'descripcion' => 'Personal que consulta los reportes en el panel interno.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
            [
                'nombre' => 'admin_sistema',
                'descripcion' => 'Administrador con funciones administrativas del sistema.',
                'creado_en' => $fecha,
                'actualizado_en' => $fecha,
            ],
        ]);
    }
}