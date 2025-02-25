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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users');
            $table->string('firstname', 150);
            $table->string('middlename', 150);
            $table->string('lastname', 150);
            $table->string('username', 150);
            $table->string('password', 150);
            $table->string('confirm_password', 150);
            $table->string('admin_image', 150);
            $table->string('admin_type', 150);
            $table->timestamps();
            $table->foreign('users')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
