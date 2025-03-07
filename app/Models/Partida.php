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
    protected $fillable = ['completado', 'tiempo', 'gmail', 'instagram', 'twitter', 'whatsapp', 'tablet', 'id_usuario'];
    public $timestamps = true;

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }
}
