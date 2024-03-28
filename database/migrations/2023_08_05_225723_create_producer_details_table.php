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
        Schema::create('producer_details', function (Blueprint $table) {
            $table->id();
            $table->string('product_location');
            $table->float('quantity');
            $table->string('weight',20);
            $table->float('price');
            $table->foreignId('produceruser_id');
            $table->foreignId('product_id');
            $table->timestamps();

            $table->foreign('produceruser_id')->references('id')->on('users')->onDelete('cascade');;
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producer_details');
    }
};
