<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NDK_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NDK_LOAI_SAN_PHAM')->insert([
            'ndkMaLoai' => "DT01",
            'ndkTenLoai' => "Điện thoại",
            'ndkTrangThai' => 0   
        ]);
        DB::table('NDK_LOAI_SAN_PHAM')->insert([
            'ndkMaLoai' => "LT02",
            'ndkTenLoai' => "Laptop",
            'ndkTrangThai' => 0   
        ]);
        DB::table('NDK_LOAI_SAN_PHAM')->insert([
            'ndkMaLoai' => "PK03",
            'ndkTenLoai' => "Phụ kiện",
            'ndkTrangThai' => 0   
        ]);
    }
}
