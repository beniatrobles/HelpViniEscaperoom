<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';  // Especifica el nombre de la tabla en la base de datos
    protected $primaryKey = 'id_usuario';  // Establece la clave primaria

    // Definir los campos que se pueden asignar de forma masiva
    protected $fillable = ['nombre_usuario', 'correo', 'contraseña', 'id_rol'];

    // Definir la relación con el modelo Rol
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol',);  // Relación inversa: un usuario pertenece a un rol
    }

    public function partidas()
    {
        return $this->hasMany(Partida::class, 'id_usuario');
    }
}

