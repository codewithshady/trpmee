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
        Schema::create('pakage_destinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('destination_id')->constrained('destinations')->onDelete('cascade'); // Foreign key to destinations table
            $table->string('title');                             // Tour title
            $table->text('description')->nullable();             // Optional detailed description
            $table->string('location');                          // Tour location
            $table->string('duration')->nullable();              // e.g., "6 Days, 3 Nights"
            $table->decimal('price', 8, 2);                      // e.g., 59.00
            $table->string('image');                             // Main image path
            $table->boolean('is_featured')->default(false);      // For badge display
            $table->integer('discount')->nullable();             // Optional: percent off
            $table->integer('rating')->default(5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakage_destinations');
    }
};
