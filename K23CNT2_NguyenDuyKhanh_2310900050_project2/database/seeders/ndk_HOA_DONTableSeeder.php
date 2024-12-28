<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ndk_HOA_DONTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ndk_HOA_DON')->insert([
            'ndkMaHoaDon'=>'HD001',
            'ndkMaKhachHang'=>1,
            'ndkNgayHoaDon'=>'2024/12/12',
            'ndkNgayNhan'=>'2024/12/12',
            'ndkHoTenKhachHang'=>'Vũ Tiến Đức',
            'ndkEmail'=>'vuducc@gmail.com',
            'ndkDienThoai'=>'012550036',
            'ndkDiaChi'=>'Yên Bái-Yên Bình',
            'ndkTongGiaTri'=>'790000',
            'ndkTrangThai'=>2,
        ]);

        DB::table('ndk_HOA_DON')->insert([
            'ndkMaHoaDon'=>'HD002',
            'ndkMaKhachHang'=>2,
            'ndkNgayHoaDon'=>'2024/12/20',
            'ndkNgayNhan'=>'2024/12/21',
            'ndkHoTenKhachHang'=>'Trần Tuấn Hưng',
            'ndkEmail'=>'hungtran@gmail.com',
            'ndkDienThoai'=>'012588868',
            'ndkDiaChi'=>'Phú Thọ',
            'ndkTongGiaTri'=>'125000',
            'ndkTrangThai'=>0,
        ]);

        DB::table('ndk_HOA_DON')->insert([
            'ndkMaHoaDon'=>'HD003',
            'ndkMaKhachHang'=>3,
            'ndkNgayHoaDon'=>'2024/12/17',
            'ndkNgayNhan'=>'2024/12/17',
            'ndkHoTenKhachHang'=>'Phan Quang Minh',
            'ndkEmail'=>'pminh@gmail.com',
            'ndkDienThoai'=>'0382550508',
            'ndkDiaChi'=>'Phú Thọ',
            'ndkTongGiaTri'=>'999000',
            'ndkTrangThai'=>1,
        ]);

        DB::table('ndk_HOA_DON')->insert([
            'ndkMaHoaDon'=>'HD004',
            'ndkMaKhachHang'=>1,
            'ndkNgayHoaDon'=>'2024/12/12',
            'ndkNgayNhan'=>'2024/12/12',
            'ndkHoTenKhachHang'=>'Vũ Tiến Đức',
            'ndkEmail'=>'vuducc@gmail.com',
            'ndkDienThoai'=>'012550036',
            'ndkDiaChi'=>'Yên Bái-Yên Bình',
            'ndkTongGiaTri'=>'660000',
            'ndkTrangThai'=>1,
        ]);

        DB::table('ndk_HOA_DON')->insert([
            'ndkMaHoaDon'=>'HD005',
            'ndkMaKhachHang'=>4,
            'ndkNgayHoaDon'=>'2024/12/03',
            'ndkNgayNhan'=>'2024/12/04',
            'ndkHoTenKhachHang'=>'Phạm Tùng Quân',
            'ndkEmail'=>'quanpham@gmail.com',
            'ndkDienThoai'=>'094357152',
            'ndkDiaChi'=>'Hà Nội',
            'ndkTongGiaTri'=>'777999',
            'ndkTrangThai'=>1,
        ]);
    }
}