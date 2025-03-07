<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partida;

class PartidasSeeder extends Seeder
{
    public function run()
    {
    
    
        \App\Models\Partida::create([
            'id_usuario' => 1,
            'tiempo' => 150,
            'completado' => true,
            'tablet' => true,
            'gmail' => false,
            'instagram' => true,
            'twitter' => false,
            'whatsapp' => true,
        ]);
    
        \App\Models\Partida::create([
            'id_usuario' => 1,
            'tiempo' => 250,
            'completado' => false,
            'tablet' => false,
            'gmail' => true,
            'instagram' => false,
            'twitter' => true,
            'whatsapp' => true,
        ]);
    }
}
