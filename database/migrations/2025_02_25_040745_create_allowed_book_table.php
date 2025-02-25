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
        Schema::create('allowed_book', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('borrowed_book');
            $table->integer('qntty');
            $table->timestamps();
            $table->foreign('borrowed_book')->references('id')->on('borrowed_book')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allowed_book');
    }
};
