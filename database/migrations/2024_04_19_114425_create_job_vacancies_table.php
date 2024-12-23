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
        Schema::create('job_vacancies', function (Blueprint $table) {
            $table->bigIncrements('id')->primary(); // Auto-incrementing integer id field
            $table->uuid('uuid')->unique();
            $table->foreignUuid('creator_id')->references('uuid')->on('users');
            $table->string('title')->nullable();
            $table->string('due_date')->nullable();
            $table->longText('description')->nullable();
            $table->longText('responsibility')->nullable();
            $table->string('requirement')->nullable();
            $table->string('environment')->nullable();
            $table->string('schedule')->nullable();
            $table->string('benefits')->nullable();
            $table->string('location')->nullable();
            $table->string('postcode')->nullable();
            $table->string('type')->nullable();
            $table->string('pay_rate')->nullable();
            $table->string('salary')->nullable();
            $table->string('contact')->nullable();
            $table->boolean('is_listed')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_vacancies');
    }
};
