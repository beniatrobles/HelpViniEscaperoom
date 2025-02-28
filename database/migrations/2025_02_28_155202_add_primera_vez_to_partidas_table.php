
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPrimeraVezToPartidasTable extends Migration{
    public function up(): void
    {
        Schema::table('partidas', function (Blueprint $table) {
            $table->boolean('primera_vez')->default(false)->after('id_partida');
        });
    }

    public function down(): void
    {
        Schema::table('partidas', function (Blueprint $table) {
            $table->dropColumn('primera_vez');
        });
    }
}   
