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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->bigIncrements('id')->primary(); // Auto-incrementing integer id field
            $table->uuid('uuid')->unique();
            $table->foreignUuid('vaccancy_id')->references('uuid')->on('job_vacancies');
            $table->string('fullname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('cv')->nullable();
            $table->string('location')->nullable();
            $table->string('country')->nullable();
            $table->string('right_to_work')->nullable();
            $table->string('dl')->nullable();
            $table->boolean('is_approved')->default(0);
            $table->boolean('is_rejected')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
