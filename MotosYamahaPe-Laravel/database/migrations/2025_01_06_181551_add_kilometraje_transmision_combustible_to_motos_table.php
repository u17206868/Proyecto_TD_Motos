<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKilometrajeTransmisionCombustibleToMotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('motos', function (Blueprint $table) {
            $table->integer('kilometraje')->after('año')->nullable()->comment('Kilómetros recorridos por la moto');
            $table->string('transmision')->after('kilometraje')->nullable()->comment('Tipo de transmisión: automática o mecánica');
            $table->string('combustible')->after('transmision')->nullable()->comment('Tipo de combustible: gasolina, diésel, GLP, etc.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('motos', function (Blueprint $table) {
            $table->dropColumn(['kilometraje', 'transmision', 'combustible']);
        });
    }
}
