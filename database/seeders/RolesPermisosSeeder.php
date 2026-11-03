<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class RolesPermisosSeeder extends Seeder
{
    public function run(): void
    {
        $asignaciones = [
            'ciudadano' => [
                'reportes.crear',
                'reportes.consultar_propios',
                'tablero_publico.consultar',
            ],
            'personal_autorizado' => [
                'reportes.consultar_todos',
                'archivos.consultar',
                'analisis_ia.consultar',
                'tablero_interno.consultar',
            ],
            'admin_sistema' => [
                'reportes.consultar_todos',
                'archivos.consultar',
                'analisis_ia.consultar',
                'tablero_interno.consultar',
                'usuarios.gestionar',
                'auditoria.consultar',
            ],
        ];

        $fecha = now();
        $relaciones = [];

        foreach ($asignaciones as $nombreRol => $clavesPermisos) {
            $rolId = DB::table('roles')
                ->where('nombre', $nombreRol)
                ->value('id');

            if ($rolId === null) {
                throw new RuntimeException("No existe el rol: {$nombreRol}");
            }

            foreach ($clavesPermisos as $clavePermiso) {
                $permisoId = DB::table('permisos')
                    ->where('clave', $clavePermiso)
                    ->value('id');

                if ($permisoId === null) {
                    throw new RuntimeException("No existe el permiso: {$clavePermiso}");
                }

                $relaciones[] = [
                    'rol_id' => $rolId,
                    'permiso_id' => $permisoId,
                    'creado_en' => $fecha,
                ];
            }
        }

        DB::table('roles_permisos')->insertOrIgnore($relaciones);
    }
}