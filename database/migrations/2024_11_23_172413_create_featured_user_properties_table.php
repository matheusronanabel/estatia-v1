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
        Schema::create('featured_user_properties', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id')->constrained('users','id');
            $table->foreignId('property_id')->constrained('properties','id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('featured_user_properties');
    }
};
