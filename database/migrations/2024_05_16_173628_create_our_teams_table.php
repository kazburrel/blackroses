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
        Schema::create('our_teams', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->uuid('uuid')->unique();
            $table->foreignUuid('creator')->references('uuid')->on('users');
            $table->string('fullname')->nullable();
            $table->string('image')->nullable();
            $table->string('position')->nullable();
            $table->text('write_up')->nullable();
            $table->string('roles')->nullable();
            $table->string('permission')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_teams');
    }
};
