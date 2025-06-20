<?php

namespace Database\Factories;

use App\Models\Partida;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartidaFactory extends Factory
{
    protected $model = Partida::class;

    public function definition()
    {
        // Obtener todos los usuarios existentes en la base de datos
        $usuarios = Usuario::all();

        // Verificar si hay usuarios en la base de datos
        if ($usuarios->count() > 0) {
            // Asignar una partida para cada usuario existente
            foreach ($usuarios as $usuario) {
                Partida::create([
                    'id_usuario' => $usuario->id_usuario, 
                    'completado' => $this->faker->boolean, 
                    'tiempo' => $this->faker->numberBetween(30, 120), 
                    'created_at' => now(),  
                    'updated_at' => now(),  
                ]);
            }
        }

        return [];  
    }
}

