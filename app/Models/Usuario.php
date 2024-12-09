<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Model
{
    use HasFactory;

    // Si la clave primaria es 'id_usuario' en vez de 'id' (lo que hemos hecho en la migración)
    
    protected $table = "usuarios";
    protected $primaryKey = 'id_usuario';

    protected $fillable = ['nombre_usuario','correo','contraseña'];

    protected $hidden = ['id_usuario'];

    // Definir la relación 1:1 con el modelo Rol (un usuario tiene un solo rol)
    public function rol()
    {
        return $this->hasOne(Rol::class, 'id_usuario', 'id_usuario');
    }

    // Definir la relación con el modelo Partida
    public function partidas()
    {
        return $this->hasMany(Partida::class, 'id_usuario', 'id_usuario');
    }


    public function obtenerUsuarios(){
        return Usuario::all();
    }

    public function obtenerUsuarioPorId($id_usuario){
        return Usuario::find($id_usuario);
    }
}
