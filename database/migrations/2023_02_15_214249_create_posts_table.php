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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30);
            $table->integer('price');
            $table->string('message', 255);
            $table->integer('like')->nullable();
            $table->foreignId('user_id')->constrained();
            // $table->unsignedBigInteger('secondary_category_id');
            $table->foreignId('secondary_category_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
