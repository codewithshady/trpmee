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
        Schema::create('package_destination_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pakage_destination_id')
                ->constrained('pakage_destinations')
                ->onDelete('cascade'); // Foreign key to pakage_destinations table
            $table->string('title'); // Name of the destination
            $table->text('description')->nullable(); // Overview
            $table->string('country'); // Country name
            $table->boolean('visa_required')->default(false);
            $table->decimal('price_per_person', 8, 2)->default(0);
            $table->string('language')->default('English');
            $table->string('area')->nullable(); // e.g. "90.000 Km²"
            $table->text('map_embed')->nullable(); // Google Maps iframe embed
            $table->boolean('is_featured')->default(false); // Optional
            $table->string('main_image')->nullable(); // Primary image
            $table->json('gallery_images')->nullable(); // JSON array of images
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_destination_details');
    }
};
