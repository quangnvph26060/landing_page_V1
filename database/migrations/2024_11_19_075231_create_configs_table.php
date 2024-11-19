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
        Schema::create('configs', function (Blueprint $table) {
            $table->id();

            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();

            $table->string('branch')->nullable();
            $table->string('address')->nullable();
            $table->string('hotline')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('copyright')->nullable();
            $table->longText('script')->nullable();

            $table->string('title_seo')->nullable();
            $table->string('description_seo')->nullable();
            $table->string('keywords_seo')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
