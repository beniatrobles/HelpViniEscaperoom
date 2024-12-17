<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'rols';  // Especifica el nombre de la tabla en la base de datos
    protected $primaryKey = 'id_rol';  // Establece la clave primaria

    // Definir los campos que se pueden asignar de forma masiva
    protected $fillable = ['rol'];
}

