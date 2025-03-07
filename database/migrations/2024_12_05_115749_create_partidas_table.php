<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('partidas', function (Blueprint $table) {
            $table->id('id_partida'); 
            $table->boolean('tablet');
            $table->boolean('gmail');
            $table->boolean('instagram');
            $table->boolean('twitter');
            $table->boolean('whatsapp');     
            $table->boolean('completado'); 
            $table->integer('tiempo'); 
            
            // Clave foránea correctamente definida
            $table->foreignId('id_usuario')->constrained('usuarios', 'id_usuario')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidas');
    }
};

