<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    // Especificamos el nombre de la tabla si no es plural
    protected $table = 'rols';

    // La clave primaria de la tabla 'rols' es id_usuario
    protected $primaryKey = 'id_usuario';

    // Campos que pueden ser asignados masivamente
    protected $fillable = ['id_usuario', 'rol'];

    // Relación inversa con el modelo Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}

