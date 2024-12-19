<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';  
    protected $primaryKey = 'id_usuario';  

    
    protected $fillable = ['nombre_usuario', 'correo', 'contrasena', 'id_rol'];

    
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol',);  
    }

    public function partidas()
    {
        return $this->hasMany(Partida::class, 'id_usuario');
    }
}

