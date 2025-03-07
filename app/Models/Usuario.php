<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model implements Authenticatable
{
    use HasFactory, Notifiable; 

    protected $table = 'usuarios';  
    protected $primaryKey = 'id_usuario';  

    protected $fillable = ['nombre_usuario', 'correo', 'contrasena', 'avatar_ruta' , 'id_rol'];

    // Relación con el modelo Rol
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }

    // Relación con el modelo Partida
    public function partidas()
    {
        return $this->hasMany(Partida::class, 'id_usuario');
    }

    // Método para eliminar automáticamente las partidas cuando se borra un usuario
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($usuario) {
            $usuario->partidas()->delete();  // Elimina las partidas del usuario antes de eliminarlo
        });
    }

    // Métodos que implementan la interfaz `Authenticatable`

    // Devuelve el nombre de la columna del identificador (usualmente `id` pero en tu caso es `id_usuario`)
    public function getAuthIdentifierName()
    {
        return 'id_usuario';  // Devuelve el nombre del campo de identificación
    }

    // Devuelve el valor del identificador del usuario (ID)
    public function getAuthIdentifier()
    {
        return $this->getKey();  // Devuelve el ID del usuario
    }

    // Devuelve la contraseña del usuario
    public function getAuthPasswordName()
    {
        return $this->contrasena;  // Aquí debe estar el campo de la contraseña
    }

    public function getAuthPassword()
    {
        return $this->contrasena;  // Aquí debe estar el campo de la contraseña
    }

    // Devuelve el token de "remember me"
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    // Establece el token de "remember me"
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    // Devuelve el nombre del campo de "remember token"
    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
