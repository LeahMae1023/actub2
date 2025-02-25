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
        Schema::create('borrowed_book', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users');
            $table->date('date_borrowed');
            $table->date('daue_date');
            $table->date('date_returned');
            $table->string('barrowed_status',100);
            $table->string('book_penalty',100);
            $table->timestamps();
            $table->foreign('users')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowed_book');
    }
};
