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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); 
            $table->string('school_number', 150);
            $table->string('firstname', 150);
            $table->string('middlename', 150);
            $table->string('lastname', 150);
            $table->string('contact', 150);
            $table->string('gender', 150);
            $table->string('address', 150);
            $table->string('type', 150);
            $table->string('level', 150);
            $table->string('course', 150);
            $table->string('user_image', 150);
            $table->string('status', 150);
            $table->dateTime('user_added');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
