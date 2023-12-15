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
        Schema::create('pochettes', function (Blueprint $table) {
            $table->id();
            $table->string('quantity');
            $table->string('rabats');
            $table->string('inside_printe');
            $table->string('choice_carton');
            $table->string('infography');
            $table->string('advertising');
            $table->string('livraison');
            $table->string('product_price'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pochettes');
    }
};
