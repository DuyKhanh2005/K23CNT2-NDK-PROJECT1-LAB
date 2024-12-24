<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NDK_SAN_PHAMTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('NDK_SAN_PHAM')->insert([
            'ndkMaSP' => 'A01',
            'ndkTenSP' => 'Asus Rog Phone 6 256GB',
            'ndkHinhAnh' => 'img/asus-rog-phone-6-12gb-256gb_2_1_2_3_2.webp',
            'ndkSoLuong' => 150,
            'ndkDonGia' => 214900,
            'ndkMaLoai' => 1,
            'ndkTrangThai' => 0
        ]);
    }
}
