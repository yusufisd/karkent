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
        Schema::create('page_definitous3s', function (Blueprint $table) {
            $table->id();
            $table->string('title1_1');
            $table->string('title1_2');
            $table->string('icon1');
            $table->string('title2_1');
            $table->string('title2_2');
            $table->string('icon2');
            $table->string('title3_1');
            $table->string('title3_2');
            $table->string('icon3');
            $table->string('title4_1');
            $table->string('title4_2');
            $table->string('icon4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_definitous3s');
    }
};
