<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('paket_id');
            $table->foreignId('fotografer_id');
            $table->string('tanggal_pemesanan');
            $table->string('no_hp');
            $table->string('lokasi');
            $table->time('jam');
            $table->string('status')->default('Belum Bayar');
            $table->string('bukti_bayar')->nullable();
            $table->timestamps();

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};