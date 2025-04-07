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
        Schema::create('tbl_gurumapel', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('id_guru');
            $table->bigInteger('id_mapel');
            // $table->foreign('id_guru')->references('id')->on('users');
            // $table->foreign('id_mapel')->references('id')->on('tbl_mapel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_gurumapel');
    }
};