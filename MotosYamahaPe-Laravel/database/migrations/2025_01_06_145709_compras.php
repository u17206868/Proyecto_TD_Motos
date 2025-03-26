<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id(); // ID único de la compra
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade'); // Relación con usuarios
            $table->foreignId('auto_id')->nullable()->constrained('autos')->nullOnDelete(); // Relación con autos
            $table->foreignId('moto_id')->nullable()->constrained('motos')->nullOnDelete(); // Relación con motos
            $table->foreignId('servicio_id')->nullable()->constrained('servicios')->nullOnDelete(); // Relación con servicios

            // Fecha de compra con valor por defecto
            $table->timestamp('fecha_compra')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->decimal('monto_total', 10, 2);

            // Campos de auditoría
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
