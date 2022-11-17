<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsSeeder::class,
            OrientadorsSeeder::class,
            ServidorSeeder::class,
            AlunosSeeder::class,
            ProgramasSeeder::class,
            CursoSeeder::class,
            DisciplinaSeeder::class,
            Programa_servidorSeeder::class
        ]);
    }
}
