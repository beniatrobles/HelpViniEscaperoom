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
                    'id_usuario' => $usuario->id_usuario,  
                    'rol' => $this->faker->randomElement(['usuario', 'administrador']),  
                    'created_at' => now(),  
                    'updated_at' => now(),  
                ]);
            }
        }

        return [];  // Si no hay usuarios, no creamos nada
    }
}
