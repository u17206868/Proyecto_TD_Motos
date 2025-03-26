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
        // Schema::table('autos', function (Blueprint $table) {
        //     $table->foreignId('usuario_id')->after('id')->constrained('usuarios')->onDelete('cascade');
        // });
    }

    public function down()
    {
        Schema::table('autos', function (Blueprint $table) {
            $table->dropColumn('usuario_id');
        });
    }
};
