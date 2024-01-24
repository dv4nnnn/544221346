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
        Schema::create('table_penjualan', function (Blueprint $table) {
            $table->id();
            $table->integer('ID_Penjualan');
            $table->integer('ID_Mobil');
            $table->integer('ID_Pelanggan');
            $table->string('Tanggal_Penjualan');
            $table->integer('Jumlah_Unit');
            $table->integer('Total_Harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_penjualan');
    }
};
