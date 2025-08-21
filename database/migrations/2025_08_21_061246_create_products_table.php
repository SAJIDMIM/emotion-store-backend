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
        Schema::create('products', function (Blueprint $table) {
            $table->id();                              // Primary key
            $table->string('name');                     // Product name
            $table->text('description')->nullable();   // Optional description
            $table->decimal('price', 10, 2);           // Price with 2 decimals
            $table->string('category');                // Category (luxury, comfort, etc.)
            $table->string('image_url')->nullable();   // Optional image URL
            $table->timestamps();                       // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
