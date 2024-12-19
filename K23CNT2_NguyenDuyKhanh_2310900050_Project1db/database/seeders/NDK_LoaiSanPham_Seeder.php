<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import lớp DB

class NDK_LoaiSanPham_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ndkLoaiSanPham') -> insert([
            'ndkMaLoai' => "DT01",
            'ndkTenLoai' => "Điện thoại",
            'ndkTrangThai' => 0   
          ]);
          DB::table('ndkLoaiSanPham') -> insert([
              'ndkMaLoai' => "LT02",
              'ndkTenLoai' => "Laptop",
              'ndkTrangThai' => 0   
            ]);
            DB::table('ndkLoaiSanPham') -> insert([
              'ndkMaLoai' => "PK03",
              'ndkTenLoai' => "Phụ kiện",
              'ndkTrangThai' => 0   
            ]);
    }
}
