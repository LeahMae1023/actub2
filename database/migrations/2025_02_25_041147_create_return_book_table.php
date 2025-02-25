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
        Schema::create('return_book', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('allowed_book');
            $table->date('date_borrowed');
            $table->date('due_date');
            $table->date('date_returned');
            $table->string('book_penalty');
            $table->timestamps();
            $table->foreign('allowed_book')->references('id')->on('allowed_book')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return_book');
    }
};
