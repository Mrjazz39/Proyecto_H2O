<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            PermisosSeeder::class,
            RolesPermisosSeeder::class,
            CategoriasSeeder::class,
            EstadosReporteSeeder::class,
            PrioridadesSeeder::class,
        ]);
    }
}