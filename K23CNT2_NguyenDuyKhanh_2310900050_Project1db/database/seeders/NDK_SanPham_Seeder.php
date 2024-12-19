<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NDK_SanPham_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ndkSanPham') -> insert([
            'ndkMaSP' => "A01",
            'ndkTenSP' => "Asus Rog Phone 6 256GB",
            'ndkHinhAnh' =>"img/asus-rog-phone-6-12gb-256gb_2_1_2_3_2.webp",
            'ndkSoLuong' => 150 ,
            'ndkDonGia' =>214900,
            'ndkMaLoai' => 1,
            'ndkTrangThai' =>0
        ]);
        DB::table('ndkSanPham') -> insert([
            'ndkMaSP' => "N02",
            'ndkTenSP' => "Nubia Red Magic 9 PRO",
            'ndkHinhAnh' =>"img/dien-thoai-nubia-red-magic-9-pro_1_1.webp",
            'ndkSoLuong' => 120,
            'ndkDonGia' =>939000,
            'ndkMaLoai' => 1,
            'ndkTrangThai' =>0
        ]);
        DB::table('ndkSanPham') -> insert([
            'ndkMaSP' => "S03",
            'ndkTenSP' => "Samsung Galaxy Z Fold 6",
            'ndkHinhAnh' =>"img/dsamsung-galaxy-z-fold-6-xanh_5_.webp",
            'ndkSoLuong' => 165,
            'ndkDonGia' => 419900,
            'ndkMaLoai' => 1,
            'ndkTrangThai' =>0
        ]);
        DB::table('ndkSanPham') -> insert([
            'ndkMaSP' => "X04",
            'ndkTenSP' => "Xiaomi 14 Ultra",
            'ndkHinhAnh' =>"img/xiaomi-14-ultra_3.webp",
            'ndkSoLuong' => 220,
            'ndkDonGia' => 240900,
            'ndkMaLoai' => 1,
            'ndkTrangThai' =>0
        ]);
        DB::table('ndkSanPham') -> insert([
            'ndkMaSP' => "HP01",
            'ndkTenSP' => "HP OMEN 14",
            'ndkHinhAnh' =>"img/hp-omen-14-fb0135tx-ultra-7-ay8v1pa-thumb-638683225582764621-600x600.webp",
            'ndkSoLuong' => 110,
            'ndkDonGia' => 657900,
            'ndkMaLoai' => 2,
            'ndkTrangThai' =>0
        ]);
        DB::table('ndkSanPham') -> insert([
            'ndkMaSP' => "L02",
            'ndkTenSP' => "Lennovo Legion PRO 7",
            'ndkHinhAnh' =>"img/hp-omen-14-fb0135tx-ultra-7-ay8v1pa-thumb-638683225582764621-600x600.webp",
            'ndkSoLuong' => 98,
            'ndkDonGia' => 106990,
            'ndkMaLoai' => 2,
            'ndkTrangThai' =>0
        ]);
    }
}
