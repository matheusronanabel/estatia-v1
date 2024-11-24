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
        Schema::create('property_nearby_category_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained('properties','id');
            $table->foreignId('nearby_category_id')->constrained('nearby_categories','id');
            $table->string('name');
            $table->decimal('distance',4,2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_nearby_category_details');
    }
};
