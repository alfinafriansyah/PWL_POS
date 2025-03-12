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
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Andi', 'penjualan_kode' => 'TRS0001', 'penjualan_tanggal' => '2024-11-05'],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Budi', 'penjualan_kode' => 'TRS0002', 'penjualan_tanggal' => '2024-11-05'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Caca', 'penjualan_kode' => 'TRS0003', 'penjualan_tanggal' => '2024-11-06'],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Dedi', 'penjualan_kode' => 'TRS0004', 'penjualan_tanggal' => '2024-11-06'],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Jono', 'penjualan_kode' => 'TRS0005', 'penjualan_tanggal' => '2024-11-06'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Joni', 'penjualan_kode' => 'TRS0006', 'penjualan_tanggal' => '2024-11-06'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Indra', 'penjualan_kode' => 'TRS0007', 'penjualan_tanggal' => '2024-11-07'],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Hani', 'penjualan_kode' => 'TRS0008', 'penjualan_tanggal' => '2024-11-07'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Iwan', 'penjualan_kode' => 'TRS0009', 'penjualan_tanggal' => '2024-11-08'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Slamet', 'penjualan_kode' => 'TRS0010', 'penjualan_tanggal' => '2024-11-09'],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
