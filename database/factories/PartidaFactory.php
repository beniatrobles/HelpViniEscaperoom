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
                    'id_usuario' => $usuario->id_usuario, // Asociar la partida al usuario
                    'completado' => $this->faker->boolean, // Valor aleatorio de completado (true o false)
                    'tiempo' => $this->faker->numberBetween(30, 120), // Tiempo aleatorio entre 30 y 120 minutos
                    'created_at' => now(),  // Fecha actual de creación
                    'updated_at' => now(),  // Fecha actual de actualización
                ]);
            }
        }

        return [];  // Si no hay usuarios, no se crea nada
    }
}

