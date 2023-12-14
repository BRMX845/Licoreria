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
        Schema::create('shopping', function (Blueprint $table) {
            $table->id();
            $table->string('numero_compra')->unique();
            $table->dateTime('fecha_compra');
            $table->unsignedBigInteger('producto_id');
            $table->integer('cantidad');
            $table->float('precio_unitario');
            $table->float('precio_total');
            $table->timestamps();

            $table->foreign('producto_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping');
    }
};
