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
        Schema::create('post_keywords', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('postid');
            $table->unsignedBigInteger('keyword_id');

            $table->foreign('postid')->references('postid')->on('posts')->onDelete('cascade');
            $table->foreign('keyword_id')->references('id')->on('keywords')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_keywords');
    }
};
