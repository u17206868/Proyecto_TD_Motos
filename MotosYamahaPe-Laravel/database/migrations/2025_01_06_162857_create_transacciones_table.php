<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTransaccionesTable extends Migration
{
    public function up()
    {
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id();
            
            // Relación con la tabla 'compras', asegurándonos de que 'compras' esté creada primero
            $table->foreignId('id_compra')->constrained('compras')->onDelete('cascade');
            
            // Monto de la transacción
            $table->decimal('monto', 10, 2);
            
            // Fecha de la transacción con valor por defecto
            $table->timestamp('fecha_transaccion')->useCurrent();
            
            // Método de pago
            $table->enum('metodo_pago', ['tarjeta', 'efectivo', 'transferencia', 'paypal']);
            
            // Campos de auditoría
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transacciones');
    }
}

