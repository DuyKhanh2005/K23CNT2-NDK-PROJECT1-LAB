<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ndk_KHACH_HANGTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); // Khởi tạo Faker

        // Tạo 10 khách hàng ngẫu nhiên
        foreach (range(1, 10) as $index) {
            DB::table('ndk_KHACH_HANG')->insert([
                'ndkMaKhachHang' => 'KH' . str_pad($index, 3, '0', STR_PAD_LEFT),
                'ndkHoTenKhachHang' => $faker->name, // Tên khách hàng
                'ndkEmail' => $faker->email, // Email ngẫu nhiên
                'ndkMatKhau' => bcrypt('123456a@'), // Mật khẩu mặc định
                'ndkDienThoai' => $faker->phoneNumber, // Số điện thoại ngẫu nhiên
                'ndkDiaChi' => $faker->address, // Địa chỉ ngẫu nhiên
                'ndkNgayDangKy' => $faker->date('Y-m-d', 'now'), // Ngày đăng ký ngẫu nhiên
                'ndkTrangThai' => rand(0, 2), // Trạng thái ngẫu nhiên (0, 1, hoặc 2)
            ]);
        }
    }
}
