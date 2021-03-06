<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::create([
            'name' => 'Administrador',
            'rut' => '207303690',
            'status' => 1,
            'tipo_usuario' => 'Administrador',
            'email'=> 'admin@admin.com',
            'password' => bcrypt('207303')
        ]);

        \App\Models\Carrera::create([
            'codigo' => 1000,
            'nombre' => 'Carrera Prueba 1',
        ]);
        \App\Models\Carrera::create([
            'codigo' => 2000,
            'nombre' => 'Carrera Prueba 2',
        ]);
        \App\Models\Carrera::create([
            'codigo' => 3000,
            'nombre' => 'Carrera Prueba 3',
        ]);
        \App\Models\Carrera::create([
            'codigo' => 4000,
            'nombre' => 'Carrera Prueba 4',
        ]);
        \App\Models\Carrera::create([
            'codigo' => 5000,
            'nombre' => 'Carrera Prueba 5',
        ]);
        \App\Models\Carrera::create([
            'codigo' => 6000,
            'nombre' => 'Carrera Prueba 6',
        ]);
        \App\Models\Carrera::create([
            'codigo' => 7000,
            'nombre' => 'Carrera Prueba 7',
        ]);

        \App\Models\Solicitud::create([
            'tipo' => 'Sobrecupo'
        ]);
        \App\Models\Solicitud::create([
            'tipo' => 'Cambio Paralelo'
        ]);
        \App\Models\Solicitud::create([
            'tipo' => 'Eliminación Asignatura'
        ]);
        \App\Models\Solicitud::create([
            'tipo' => 'Inscripción Asignatura'
        ]);
        \App\Models\Solicitud::create([
            'tipo' => 'Ayudantía'
        ]);
        \App\Models\Solicitud::create([
            'tipo' => 'Facilidades'
        ]);
    }
}
