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
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('book_title',100);
            $table->string('author',100);
            $table->string('author_2',100);
            $table->string('author_3',100);
            $table->string('author_4',100);
            $table->string('author_5',100);
            $table->integer('book_copies');
            $table->string('book_pub',100);
            $table->string('publisher_name',100);
            $table->string('status',30);
            $table->string('book_barcode',100);
            $table->string('book_image',100);
            $table->date('date_added');
            $table->string('remarks',100);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
