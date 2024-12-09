<?php

namespace Database\Factories;

use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class RolFactory extends Factory
{
    protected $model = Rol::class;

    public function definition()
    {
        // Obtener todos los usuarios existentes en la base de datos
        $usuarios = Usuario::all();

        // Verificar si hay usuarios en la base de datos
        if ($usuarios->count() > 0) {
            // Asignar un rol aleatorio a cada usuario
            foreach ($usuarios as $usuario) {
                Rol::create([
                    'id_usuario' => $usuario->id_usuario,  // Asociamos el rol con el usuario
                    'rol' => $this->faker->randomElement(['usuario', 'administrador']),  // Rol aleatorio
                    'created_at' => now(),  // Fecha actual de creación
                    'updated_at' => now(),  // Fecha actual de actualización
                ]);
            }
        }

        return [];  // Si no hay usuarios, no creamos nada
    }
}
