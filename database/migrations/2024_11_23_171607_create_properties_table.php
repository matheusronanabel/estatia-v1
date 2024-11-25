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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id')->constrained('users','id');
            $table->foreignId('location_id')->constrained('locations','id');
            $table->foreignId('category_id')->constrained('property_categories','id');
            $table->foreignId('condition_id')->constrained('property_conditions','id');
            $table->foreignId('type_id')->constrained('property_types','id');
            $table->string('code')->unique();
            $table->string('slug')->nullable();
            $table->text('cover_image');
            $table->longText('images');
            $table->string('title');
            $table->longText('description');
            $table->integer('number_of_bedroom')->nullable();
            $table->integer('number_of_bathroom')->nullable();
            $table->decimal('price_idr',16,2);
            $table->decimal('price_usd',16,2)->nullable();
            $table->decimal('building_size',8,2)->nullable();
            $table->decimal('land_size',8,2);
            $table->enum('publication_status',['published','draft']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
