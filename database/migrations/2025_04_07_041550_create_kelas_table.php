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
        Schema::create('tbl_kelas', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('id_tipekelas');
            $table->string('nama_kelas')->nullable();
            // $table->foreign('id_tipekelas')->references('id')->on('tbl_tipekelas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_kelas');
    }
};