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
        Schema::create('en_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('center_address');
            $table->string('center_email');
            $table->string('center_phone');
            $table->string('factory_address');
            $table->string('factory_email');
            $table->string('factory_phone');
            $table->string('museum_address');
            $table->string('museum_email');
            $table->string('museum_phone');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('youtube');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('en_contacts');
    }
};
