<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Partida extends Model
{
    use HasFactory;

    protected $table = "partidas";
    protected $primaryKey = 'id_partida';

    protected $fillable = [
        'tablet', 'gmail', 'instagram', 'twitter', 'whatsapp',
        'completado', 'tiempo', 'id_usuario', 'primera_vez',
        'terminado', 'penalizar'
    ];
    public $timestamps = true;

    


    



    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }
}
