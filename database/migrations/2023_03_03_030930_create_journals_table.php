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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->string('contact_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->integer('contact_phone')->nullable();
            $table->string('journal_email')->nullable();
            $table->string('contact_address')->nullable();
            $table->foreignId('province_id')->nullable();
            $table->foreignId('regency_id')->nullable();
            $table->string('title');
            $table->string('img');
            $table->string('abstract');
            $table->string('description');
            $table->string('website');
            $table->foreignId('publisher_id');
            $table->string('issn')->unique();
            $table->string('eissn')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journals');
    }
};
