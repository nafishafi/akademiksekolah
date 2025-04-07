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
        Schema::create('tbl_siswakelas', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('id_siswa');
            $table->bigInteger('id_kelas');
            // $table->foreign('id_siswa')->references('id')->on('tbl_siswa');
            // $table->foreign('id_kelas')->references('id')->on('tbl_kelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_siswakelas');
    }
};