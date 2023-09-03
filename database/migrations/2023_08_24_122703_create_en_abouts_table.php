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
        Schema::create('en_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('title1');
            $table->string('url1');
            $table->string('icon1');
            $table->string('title2');
            $table->string('url2');
            $table->string('icon2');
            $table->string('title3');
            $table->string('url3');
            $table->string('icon3');
            $table->string('title4');
            $table->string('url4');
            $table->string('icon4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('en_abouts');
    }
};
