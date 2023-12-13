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
        Schema::create('laporan_sensuses', function (Blueprint $table) {
            $table->string("no_seri");
            $table->string("metode_sensus");
            $table->date("tanggal_sensus")->nullable();
            $table->string("nama_petugas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_sensuses');
    }
};
