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
        Schema::create('movie_requests', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->foreignId('movie_type_id');
            $table->foreignId('movie_status_id')->nullable();
            $table->text('name');
            $table->integer('length')->nullable();
            $table->integer('year')->nullable();
            $table->integer('start_year')->nullable();
            $table->integer('end_year')->nullable();
            $table->bigInteger('budget')->nullable();
            $table->string('budget_currency')->nullable();
            $table->string('color_code')->nullable();
            $table->string('full_name');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_requests');
    }
};
