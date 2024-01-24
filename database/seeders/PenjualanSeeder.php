<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_penjualan')->insert([
            'ID_Penjualan' => 122,
            'ID_Mobil' => 1,
            'ID_Pelanggan' => 13,
            'Tanggal_Penjualan' => '9 february 1980',
            'Jumlah_Unit' => 9,
            'Total_Harga' => 3400
        ]);

        DB::table('table_penjualan')->insert([
            'ID_Penjualan' => 15,
            'ID_Mobil' => 2,
            'ID_Pelanggan' => 2,
            'Tanggal_Penjualan' => '9 maret 1988',
            'Jumlah_Unit' => 9,
            'Total_Harga' => 3400
        ]);
    }
}
