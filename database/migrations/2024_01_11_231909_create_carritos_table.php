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
        Schema::create('carrito', function (Blueprint $table) {
            // Cambiar 'id' a 'id_producto'
            $table->id('id_producto');
            
            // Agregar restricción de clave foránea para 'id_usuario'
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuarios'); // Ajusta el nombre de la tabla 'usuarios' según tu estructura

            // Agregar restricción de clave foránea para 'id_producto'
            $table->foreign('id_producto')->references('id')->on('productos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Eliminar restricciones de clave foránea antes de eliminar la tabla
        Schema::table('carrito', function (Blueprint $table) {
            $table->dropForeign(['id_usuario']);
            $table->dropForeign(['id_producto']);
        });

        Schema::dropIfExists('carrito');
    }
};
