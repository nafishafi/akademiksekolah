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
            $table->bigInteger('id')->autoIncrement();
            $table->string('nip')->nullable();
            $table->string('name')->nullable();
            $table->string('nohp', 20)->nullable();
            $table->enum('jenkel', ['Laki - Laki', 'Perempuan'])->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['Admin', 'Guru'])->nullable();
            $table->string('foto')->nullable();
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