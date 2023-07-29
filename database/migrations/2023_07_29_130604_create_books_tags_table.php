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
        Schema::create('books_tags', function (Blueprint $table) {
            $table->integer('books_id')->unsigned();
            $table->integer('tags_id')->unsigned();
        });

        Schema::table('books_tags', function (Blueprint $table) {
            $table->foreign('books_id')->references('id')->on('books');
            $table->foreign('tags_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books_tags');
    }
};
