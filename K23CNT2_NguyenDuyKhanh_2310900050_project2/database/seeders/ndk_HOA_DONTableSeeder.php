<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ndk_HOA_DONTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ndk_HOA_DON')->insert([
            'ndkMaHoaDon' => 'HD001',
            'ndkMaKhachHang' => 1, // Liên kết với khách hàng có id = 1
            'ndkNgayHoaDon' => '2024-12-12',
            'ndkNgayNhan' => '2024-12-13',
            'ndkHoTenKhachHang' => 'Nguyễn Duy Khánh',
            'ndkEmail' => 'duykhanh@gmail.com',
            'ndkDienThoai' => '0345865380',
            'ndkDiaChi' => 'Hạ Long-Quảng Ninh',
            'ndkTongGiaTri' => '1650',
            'ndkTrangThai' => 1,
        ]);

        DB::table('ndk_HOA_DON')->insert([
            'ndkMaHoaDon' => 'HD002',
            'ndkMaKhachHang' => 2, // Liên kết với khách hàng có id = 2
            'ndkNgayHoaDon' => '2024-12-20',
            'ndkNgayNhan' => '2024-12-21',
            'ndkHoTenKhachHang' => 'Đàm Tuấn Hưng',
            'ndkEmail' => 'tuantran@gmail.com',
            'ndkDienThoai' => '0123456788',
            'ndkDiaChi' => 'Phú Thọ',
            'ndkTongGiaTri' => '1650',
            'ndkTrangThai' => 0,
        ]);

        DB::table('ndk_HOA_DON')->insert([
            'ndkMaHoaDon' => 'HD003',
            'ndkMaKhachHang' => 3, // Liên kết với khách hàng có id = 3
            'ndkNgayHoaDon' => '2024-12-17',
            'ndkNgayNhan' => '2024-12-18',
            'ndkHoTenKhachHang' => 'Nguyễn Huy Thông',
            'ndkEmail' => 'hthong@gmail.com',
            'ndkDienThoai' => '0345678901',
            'ndkDiaChi' => 'Uông Bí',
            'ndkTongGiaTri' => '950',
            'ndkTrangThai' => 1,
        ]);

        DB::table('ndk_HOA_DON')->insert([
            'ndkMaHoaDon' => 'HD004',
            'ndkMaKhachHang' => 4, // Liên kết với khách hàng có id = 4
            'ndkNgayHoaDon' => '2024-12-03',
            'ndkNgayNhan' => '2024-12-04',
            'ndkHoTenKhachHang' => 'Phạm Tuấn Anh',
            'ndkEmail' => 'phamtuan@gmail.com',
            'ndkDienThoai' => '0133456789',
            'ndkDiaChi' => 'Cẩm Phả',
            'ndkTongGiaTri' => '1899',
            'ndkTrangThai' => 1,
        ]);

        DB::table('ndk_HOA_DON')->insert([
            'ndkMaHoaDon' => 'HD005',
            'ndkMaKhachHang' => 1, // Liên kết lại với khách hàng có id = 1
            'ndkNgayHoaDon' => '2024-12-25',
            'ndkNgayNhan' => '2024-12-26',
            'ndkHoTenKhachHang' => 'Nguyễn Duy Khánh',
            'ndkEmail' => 'duykhanh@gmail.com',
            'ndkDienThoai' => '0345865380',
            'ndkDiaChi' => 'Hạ Long-Quảng Ninh',
            'ndkTongGiaTri' => '1750',
            'ndkTrangThai' => 2,
        ]);
    }
}
