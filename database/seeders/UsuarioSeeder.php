<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//Usamos la clase Carbon para establecer las fechas created_at y updated_at como la fecha y hora actuales.
use Carbon\Carbon;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            'id_usuario' => 1,
            'nombre_usuario' => 'admin',
            'correo' => 'admin@admin.com',
            'contrasena' => bcrypt('1234'),  
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'id_rol' => 3,  // Asignar rol de administrador
        ]);
    }
}
