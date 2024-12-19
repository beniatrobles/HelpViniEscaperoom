<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;

    protected $table = "partidas";

    protected $primaryKey = 'id_partida';
    protected $fillable = ['completado','tiempo','gmail','instagram','twitter','whatsapp'];

    


    
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }
}
