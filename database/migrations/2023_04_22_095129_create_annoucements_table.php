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
        Schema::create('annoucements', function (Blueprint $table) {
            $table->id();
            $table->string('title',);
            $table->string('detail')->nullable();
            $table->string('image')->nullable();
            $table->string('status',6)->default('False');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annoucements');
    }
};
