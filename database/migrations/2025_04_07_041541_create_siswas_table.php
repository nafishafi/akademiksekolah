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
        Schema::create('tbl_siswa', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('nis')->nullable();
            $table->string('nama_siswa')->nullable();
            $table->string('nohp_siswa', 20)->nullable();
            $table->enum('jenkel', ['Laki - Laki', 'Perempuan'])->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('password');
            $table->enum('role', ['Siswa'])->nullable();
            $table->string('foto_siswa')->nullable();
            $table->text('alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_siswa');
    }
};