<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'PT. ABC',
                'supplier_alamat' => 'Jl. Raya No. 1'
                
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'PT. XYZ',
                'supplier_alamat' => 'Jl. Raya No. 2'
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'PT. 123',
                'supplier_alamat' => 'Jl. Raya No. 3'
            ],
        ];
        
        DB::table('m_supplier')->insert($data);
    }
}
