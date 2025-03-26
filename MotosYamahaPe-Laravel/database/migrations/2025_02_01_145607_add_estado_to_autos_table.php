<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('autos', function (Blueprint $table) {
            $table->enum('estado', ['nuevo', 'usado'])->default('usado')->after('tipo');
        });
    }

    public function down()
    {
        Schema::table('autos', function (Blueprint $table) {
            $table->dropColumn('estado');
        });
    }
};
