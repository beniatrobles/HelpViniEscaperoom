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
            'nombre_usuario' => 'Aitor Lopez',
            'correo' => 'aitor@escaperoom.com',
            'contraseña' => bcrypt('1234'),  // Contraseña encriptada
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('usuarios')->insert([
            'nombre_usuario' => 'Imanol Gullon',
            'correo' => 'imanol@escaperoom.com',
            'contraseña' => bcrypt('1234'),  // Contraseña encriptada
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('usuarios')->insert([
            'nombre_usuario' => 'Beñat Robles',
            'correo' => 'benat@escaperoom.com',
            'contraseña' => bcrypt('1234'),  // Contraseña encriptada
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('usuarios')->insert([
            'nombre_usuario' => 'Anurag Yadav',
            'correo' => 'anurag@escaperoom.com',
            'contraseña' => bcrypt('1234'),  // Contraseña encriptada
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
