<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Roti Tawar', 'harga_beli' => 2000, 'harga_jual' => 2500],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'BRG003', 'barang_nama' => 'Telur Ayam', 'harga_beli' => 2000, 'harga_jual' => 2500],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Air 600ml', 'harga_beli' => 2000, 'harga_jual' => 2500],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'BRG005', 'barang_nama' => 'Teh Botol', 'harga_beli' => 3000, 'harga_jual' => 3500],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'BRG006', 'barang_nama' => 'Kopi Bubuk', 'harga_beli' => 5000, 'harga_jual' => 6000],
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'BRG007', 'barang_nama' => 'Pensil 2B', 'harga_beli' => 1000, 'harga_jual' => 1500],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'BRG008', 'barang_nama' => 'Buku Tulis', 'harga_beli' => 3000, 'harga_jual' => 3500],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'BRG009', 'barang_nama' => 'Penghapus', 'harga_beli' => 500, 'harga_jual' => 1000],
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'BRG010', 'barang_nama' => 'Pampers', 'harga_beli' => 20000, 'harga_jual' => 25000],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'BRG011', 'barang_nama' => 'Susu Formula', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'BRG012', 'barang_nama' => 'Tisu Basah', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'BRG013', 'barang_nama' => 'Face Wash', 'harga_beli' => 20000, 'harga_jual' => 25000],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'BRG014', 'barang_nama' => 'Conditioner', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG015', 'barang_nama' => 'Shampoo', 'harga_beli' => 10000,'harga_jual' => 15000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
