<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ndk_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Chèn hoặc cập nhật sản phẩm 'VP001'
        DB::table('ndk_SAN_PHAM')->insert([
            'ndkMaSanPham' => 'VP001',
            'ndkTenSanPham' => 'Cây Phú Quý',
            'ndkHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'ndkSoLuong' => 100,
            'ndkDonGia' => 699000,
            'ndkMaLoai' => 1,
            'ndkTrangThai' => 0
        ]);
        
        DB::table('ndk_SAN_PHAM')->insert([
            'ndkMaSanPham' => 'VP002',
            'ndkTenSanPham' => 'Cây Đại Phú Gia',
            'ndkHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'ndkSoLuong' => 100,
            'ndkDonGia' => 550000,
            'ndkMaLoai' => 1,
            'ndkTrangThai' => 0
        ]);
        
        DB::table('ndk_SAN_PHAM')->insert([
            'ndkMaSanPham' => 'VP003',
            'ndkTenSanPham' => 'Cây Hạnh Phúc',
            'ndkHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'ndkSoLuong' => 100,
            'ndkDonGia' => 250000,
            'ndkMaLoai' => 1,
            'ndkTrangThai' => 0
        ]);
        
        DB::table('ndk_SAN_PHAM')->insert([
            'ndkMaSanPham' => 'VP004',
            'ndkTenSanPham' => 'Cây Vạn Lộc',
            'ndkHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'ndkSoLuong' => 100,
            'ndkDonGia' => 799000,
            'ndkMaLoai' => 1,
            'ndkTrangThai' => 0
        ]);
        
        DB::table('ndk_SAN_PHAM')->insert([
            'ndkMaSanPham' => 'PT001',
            'ndkTenSanPham' => 'Cây Thiết Mộc Lan',
            'ndkHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'ndkSoLuong' => 150,
            'ndkDonGia' => 590000,
            'ndkMaLoai' => 3,
            'ndkTrangThai' => 0
        ]);
        
        DB::table('ndk_SAN_PHAM')->insert([
            'ndkMaSanPham' => 'PT002',
            'ndkTenSanPham' => 'Cây Hạnh Phúc',
            'ndkHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'ndkSoLuong' => 200,
            'ndkDonGia' => 290000,
            'ndkMaLoai' => 3,
            'ndkTrangThai' => 0
        ]);
        
        DB::table('ndk_SAN_PHAM')->insert([
            'ndkMaSanPham' => 'PT003',
            'ndkTenSanPham' => 'Cây Trường Sinh',
            'ndkHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'ndkSoLuong' => 200,
            'ndkDonGia' => 299000,
            'ndkMaLoai' => 3,
            'ndkTrangThai' => 0
        ]);
        
        DB::table('ndk_SAN_PHAM')->insert([
            'ndkMaSanPham' => 'PT004',
            'ndkTenSanPham' => 'Cây Hoa Nhài',
            'ndkHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'ndkSoLuong' => 300,
            'ndkDonGia' => 199000,
            'ndkMaLoai' => 3,
            'ndkTrangThai' => 0
        ]);
        
    }
}