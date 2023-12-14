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
        Schema::create('herramienta', function (Blueprint $table) {
            $table->string('id_productoh',20);
            $table->char('nombre', 100);
            $table->text('descripcion');
            $table->decimal('precio', 10, 2);
            $table->bigInteger('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias');
            $table->string('fotoproducto',100);
            $table->primary('id_productoh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('herramienta');
    }
};
