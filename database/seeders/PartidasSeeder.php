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
            'primera_vez' => true,
            'terminado' => true,
            'penalizar' => false,
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
            'primera_vez' => true,
            'terminado' => true,
            'penalizar' => false,
        ]);

        \App\Models\Partida::create([
            'id_usuario' => 2,
            'tiempo' => 170,
            'completado' => true,
            'tablet' => true,
            'gmail' => true,
            'instagram' => true,
            'twitter' => true,
            'whatsapp' => true,
            'primera_vez' => true,
            'terminado' => true,
            'penalizar' => false,
        ]);

        \App\Models\Partida::create([
            'id_usuario' => 3,
            'tiempo' => 220,
            'completado' => true,
            'tablet' => true,
            'gmail' => true,
            'instagram' => true,
            'twitter' => true,
            'whatsapp' => true,
            'primera_vez' => true,
            'terminado' => true,
            'penalizar' => false,
        ]);

        \App\Models\Partida::create([
            'id_usuario' => 4,
            'tiempo' => 175,
            'completado' => true,
            'tablet' => true,
            'gmail' => true,
            'instagram' => true,
            'twitter' => true,
            'whatsapp' => true,
            'primera_vez' => true,
            'terminado' => true,
            'penalizar' => false,
        ]);

        \App\Models\Partida::create([
            'id_usuario' => 5,
            'tiempo' => 230,
            'completado' => true,
            'tablet' => true,
            'gmail' => true,
            'instagram' => true,
            'twitter' => true,
            'whatsapp' => true,
            'primera_vez' => true,
            'terminado' => true,
            'penalizar' => false,
        ]);
    }
}
