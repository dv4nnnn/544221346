<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_pelanggan')->insert([
            'ID_Pelanggan' => 344,
            'Nama_Pelanggan' => 'ridho',
            'Alamat' => 'makassar',
            'No_Telepon' => 8996
        ]);
    }
}
