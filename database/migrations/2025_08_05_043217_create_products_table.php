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
            $table->id();
            $table->string('name')->unique(); // Unique for firstOrCreate checks in seeder
            $table->text('description')->nullable(); // Allows detailed product info
            $table->decimal('price', 8, 2); // Precise pricing (e.g., 50.00)
            $table->json('colors')->nullable(); // JSON array for color options
            $table->json('stitching_colors')->nullable(); // JSON array for stitching options
            $table->unsignedInteger('stock')->default(0); // Non-negative stock level
            $table->timestamps();
            $table->softDeletes(); // Improved for soft deletion of products without data loss
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