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
        Schema::create('page_definitous1s', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->longText('description1');
            $table->string('icon1');
            $table->string('title2');
            $table->longText('description2');
            $table->string('icon2');
            $table->string('title3');
            $table->longText('description3');
            $table->string('icon3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_definitous1s');
    }
};
