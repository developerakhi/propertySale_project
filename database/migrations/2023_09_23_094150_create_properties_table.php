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
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('location_id')->nullable();
            $table->unsignedBigInteger('size_id')->nullable();
            $table->unsignedBigInteger('location_type_id ')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('size')->nullable();
            $table->string('bed')->nullable();
            $table->string('bath')->nullable();
            $table->string('drawing')->nullable();
            $table->string('dining')->nullable();
            $table->string('kitchen')->nullable();
            $table->string('facilities')->nullable();
            $table->string('price')->nullable();
            $table->string('vedio_links')->nullable();
            $table->string('thumb_image')->nullable();
            $table->string('property_banner')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->foreign('location_type_id ')->references('id')->on('location_types')->onDelete('cascade');
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
