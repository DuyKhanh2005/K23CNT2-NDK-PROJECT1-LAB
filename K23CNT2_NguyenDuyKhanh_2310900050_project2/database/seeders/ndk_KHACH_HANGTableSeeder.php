<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ndk_KHACH_HANGTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ndk_KHACH_HANG')->insert([
            'ndkMaKhachHang'=>'KH001',
            'ndkHoTenKhachHang'=>'Vũ Tiến Đức',
            'ndkEmail'=>'vuducc@gmail.com',
            'ndkMatKhau'=>'123456a@',
            'ndkDienThoai'=>'012550036',
            'ndkDiaChi'=>'Yên Bái-Yên Bình',
            'ndkNgayDangKy'=>'2024/12/12',
            'ndkTrangThai'=>0,
        ]);

        DB::table('ndk_KHACH_HANG')->insert([
            'ndkMaKhachHang'=>'KH002',
            'ndkHoTenKhachHang'=>'Trần Tuấn Hưng',
            'ndkEmail'=>'hungtran@gmail.com',
            'ndkMatKhau'=>'hungyb123',
            'ndkDienThoai'=>'012588868',
            'ndkDiaChi'=>'Phú Thọ',
            'ndkNgayDangKy'=>'2024/12/20',
            'ndkTrangThai'=>0,
        ]);

        DB::table('ndk_KHACH_HANG')->insert([
            'ndkMaKhachHang'=>'KH003',
            'ndkHoTenKhachHang'=>'Phan Quang Minh',
            'ndkEmail'=>'pminh@gmail.com',
            'ndkMatKhau'=>'pminh3366',
            'ndkDienThoai'=>'0382550508',
            'ndkDiaChi'=>'Phú Thọ',
            'ndkNgayDangKy'=>'2024/12/17',
            'ndkTrangThai'=>2,
        ]);

        DB::table('ndk_KHACH_HANG')->insert([
            'ndkMaKhachHang'=>'KH004',
            'ndkHoTenKhachHang'=>'Phạm Tùng Quân',
            'ndkEmail'=>'quanpham@gmail.com',
            'ndkMatKhau'=>'quanpham98',
            'ndkDienThoai'=>'094357152',
            'ndkDiaChi'=>'Hà Nội',
            'ndkNgayDangKy'=>'2024/12/03',
            'ndkTrangThai'=>0,
        ]);
    }
}