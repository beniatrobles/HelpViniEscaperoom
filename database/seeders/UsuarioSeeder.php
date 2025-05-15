<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'id_usuario' => 1,
                'nombre_usuario' => 'admin',
                'correo' => 'admin@admin.com',
                'contrasena' => bcrypt('1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'id_rol' => 3,
            ],
            [
                'id_usuario' => 2,
                'nombre_usuario' => 'imanol',
                'correo' => 'imanol@admin.com',
                'contrasena' => bcrypt('1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'id_rol' => 3,
            ],
            [
                'id_usuario' => 3,
                'nombre_usuario' => 'aitor',
                'correo' => 'aitor@admin.com',
                'contrasena' => bcrypt('1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'id_rol' => 3,
            ],
            [
                'id_usuario' => 4,
                'nombre_usuario' => 'anurag',
                'correo' => 'anurag@admin.com',
                'contrasena' => bcrypt('1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'id_rol' => 3,
            ],
            [
                'id_usuario' => 5,
                'nombre_usuario' => 'beñat',
                'correo' => 'benat@admin.com',
                'contrasena' => bcrypt('1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'id_rol' => 3,
            ],
        ]);
    }
}