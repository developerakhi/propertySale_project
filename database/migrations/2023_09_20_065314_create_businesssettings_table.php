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
        Schema::create('businesssettings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name')->nullable();
            $table->string('business_tag')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('meta')->nullable();
            $table->string('facbook_links')->nullable();
            $table->string('instagram_links')->nullable();
            $table->string('linkedin_links')->nullable();
            $table->string('twitter_links')->nullable();
            $table->string('youtube_links')->nullable();
            $table->string('currency')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesssettings');
    }
};
