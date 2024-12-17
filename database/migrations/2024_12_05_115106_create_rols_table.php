<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;  // Agrega esta línea para importar la clase DB

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('rols', function (Blueprint $table) {
            $table->bigIncrements('id_rol');
            $table->string('rol');  // Definir la columna 'rol' que guardará los nombres de los roles
            $table->timestamps();
        });

        // Insertar los roles predeterminados
        DB::table('rols')->insert([
            ['rol' => 'invitado'],
            ['rol' => 'usuario'],
            ['rol' => 'administrador'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('rols');
    }
};

