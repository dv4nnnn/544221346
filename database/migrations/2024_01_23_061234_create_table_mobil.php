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
        Schema::create('table_mobil', function (Blueprint $table) {
            $table->id();
            $table->integer('ID_mobil');
            $table->string('Merek');
            $table->string('Model');
            $table->string('Tahun_produksi');
            $table->integer('Harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_mobil');
    }
};
