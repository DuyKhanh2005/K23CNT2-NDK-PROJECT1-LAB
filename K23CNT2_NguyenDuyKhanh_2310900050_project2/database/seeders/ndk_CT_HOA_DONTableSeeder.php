<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ndk_CT_HOA_DONTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ndk_CT_HOA_DON')->insert([
            'ndkHoaDonID'=>1,
            'ndkSanPhamID'=>1,
            'ndkSoLuongMua'=>12,
            'ndkDonGiaMua'=>699000,
            'ndkThanhTien'=>699000 * 12,
            'ndkTrangThai'=>0,
        ]);

        DB::table('ndk_CT_HOA_DON')->insert([
            'ndkHoaDonID'=>2,
            'ndkSanPhamID'=>2,
            'ndkSoLuongMua'=>20,
            'ndkDonGiaMua'=>550000,
            'ndkThanhTien'=>550000 * 20,
            'ndkTrangThai'=>0,
        ]);

        DB::table('ndk_CT_HOA_DON')->insert([
            'ndkHoaDonID'=>3,
            'ndkSanPhamID'=>5,
            'ndkSoLuongMua'=>5,
            'ndkDonGiaMua'=>590000,
            'ndkThanhTien'=>590000 *  5,
            'ndkTrangThai'=>0,
        ]);

        DB::table('ndk_CT_HOA_DON')->insert([
            'ndkHoaDonID'=>4,
            'ndkSanPhamID'=>8,
            'ndkSoLuongMua'=>3,
            'ndkDonGiaMua'=>199000,
            'ndkThanhTien'=>199000 * 3,
            'ndkTrangThai'=>0,
        ]);
    }
}