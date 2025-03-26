<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('motos', function (Blueprint $table) {
            $table->foreignId('usuario_id')->after('id')->constrained('usuarios')->onDelete('cascade');
            // $table->unsignedBigInteger('usuario_id')->after('id'); // Ajusta según el orden que necesites
        });
    }

    public function down()
    {
        Schema::table('autos', function (Blueprint $table) {
            $table->dropColumn('usuario_id');
        });
    }
};
