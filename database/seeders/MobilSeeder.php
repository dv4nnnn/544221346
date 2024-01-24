<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_mobil')->insert([
            'ID_mobil' => 1,
            'Merek' => 'bmw',
            'Model' => 'blabla',
            'Tahun_Produksi' => '2 januari 1980',
            'Harga' => 3400
        ]);

        DB::table('table_mobil')->insert([
            'ID_mobil' => 2,
            'Merek' => 'bmw',
            'Model' => 'blabla',
            'Tahun_Produksi' => '2 januari 1980',
            'Harga' => 3400
        ]);
    }
}
