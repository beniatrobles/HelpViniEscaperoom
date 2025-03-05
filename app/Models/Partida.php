<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;

    protected $table = "partidas";

    protected $primaryKey = 'id_partida';
    protected $fillable = [
        'primera_vez',
        'tablet',
        'gmail',
        'instagram',
        'twitter',
        'whatsapp',
        'completado',
        'tiempo',
        'id_usuario',
    ];


    


    
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }
}
