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
        Schema::create('table_pelanggan', function (Blueprint $table) {
            $table->id();
            $table->integer('ID_Pelanggan');
            $table->string('Nama_Pelanggan');
            $table->string('Alamat');
            $table->integer('No_Telepon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pelanggan');
    }
};
