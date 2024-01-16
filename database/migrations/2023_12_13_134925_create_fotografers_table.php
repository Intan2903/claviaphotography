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
        Schema::create('fotografers', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nama');
            $table->string('pengalaman');
            $table->string('alamat_email');
            $table->string('kontak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotografers');
    }
};