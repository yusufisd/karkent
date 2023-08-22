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
        Schema::create('en_sliders', function (Blueprint $table) {
            $table->id();
            $table->integer('slider_id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('button_title');
            $table->integer('queue');
            $table->string('button_link');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('en_sliders');
    }
};
