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
        Schema::create('penduduks', function (Blueprint $table) {
            $table->string("nik")->unique()->primary();
            $table->string("nama");
            $table->date("tanggal_lahir");
            $table->string("jenis_kelamin");
            $table->string("status_nikah");
            $table->string("pendidikan_terakhir");
            $table->string("no_hp");
            $table->string("status_kewarganegaraan");
            $table->string("no_kk");
            $table->string("kode_provinsi");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduks');
    }
};
