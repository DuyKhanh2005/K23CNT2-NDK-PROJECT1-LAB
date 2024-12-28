<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ndk_loai_san_phamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ndk_loai_san_pham')->insert([
            'ndkMaLoai' => "DT01",
            'ndkTenLoai' => "Điện thoại",
            'ndkTrangThai' => 0   
        ]);
        DB::table('ndk_loai_san_pham')->insert([
            'ndkMaLoai' => "LT02",
            'ndkTenLoai' => "Laptop",
            'ndkTrangThai' => 0   
        ]);
        DB::table('ndk_loai_san_pham')->insert([
            'ndkMaLoai' => "PK03",
            'ndkTenLoai' => "Phụ kiện",
            'ndkTrangThai' => 0   
        ]);
    }
}
