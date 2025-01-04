<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Đảm bảo Hash được sử dụng

class ndk_KHACH_HANGTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ndk_KHACH_HANG')->insert([
            'ndkMaKhachHang' => 'KH005', // Thay đổi mã khách hàng
            'ndkHoTenKhachHang' => 'Nguyễn Duy Khánh',
            'ndkEmail' => 'duykhanh@gmail.com',
            'ndkMatKhau' => Hash::make('123456a@'), // Mã hóa mật khẩu
            'ndkDienThoai' => '0345865380',
            'ndkDiaChi' => 'Hạ Long-Quảng Ninh',
            'ndkNgayDangKy' => '2024-01-13',
            'ndkTrangThai' => 0,
        ]);        

        DB::table('ndk_KHACH_HANG')->insert([
            'ndkMaKhachHang' => 'KH002',
            'ndkHoTenKhachHang' => 'Đàm Tuấn Hưng',
            'ndkEmail' => 'tuantran@gmail.com',
            'ndkMatKhau' => Hash::make('123456a@'), // Mã hóa mật khẩu
            'ndkDienThoai' => '0123456788',
            'ndkDiaChi' => 'Phú Thọ',
            'ndkNgayDangKy' => '2024-12-20', // Thay đổi định dạng ngày
            'ndkTrangThai' => 0,
        ]);

        DB::table('ndk_KHACH_HANG')->insert([
            'ndkMaKhachHang' => 'KH003',
            'ndkHoTenKhachHang' => 'Nguyễn Huy Thông',
            'ndkEmail' => 'hthong@gmail.com',
            'ndkMatKhau' => Hash::make('123456a@'), // Mã hóa mật khẩu
            'ndkDienThoai' => '0345678901', // Thay đổi số điện thoại
            'ndkDiaChi' => 'Uông Bí',
            'ndkNgayDangKy' => '2024-12-13', // Định dạng ngày chuẩn
            'ndkTrangThai' => 0, // Trạng thái có thể thay đổi tuỳ yêu cầu
        ]);
        

        DB::table('ndk_KHACH_HANG')->insert([
            'ndkMaKhachHang' => 'KH004',
            'ndkHoTenKhachHang' => 'Phạm Tuấn Anh',
            'ndkEmail' => 'phamtuan@gmail.com',
            'ndkMatKhau' => Hash::make('123456a@'), // Mã hóa mật khẩu
            'ndkDienThoai' => '0133456789',
            'ndkDiaChi' => 'Cẩm Phả',
            'ndkNgayDangKy' => '2024-12-03', // Thay đổi định dạng ngày
            'ndkTrangThai' => 0,
        ]);
    }
}
