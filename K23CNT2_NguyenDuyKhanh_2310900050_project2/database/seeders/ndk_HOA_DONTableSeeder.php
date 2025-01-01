<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ndk_HOA_DONTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create(); // Khởi tạo Faker

        // Tạo ra 10 hóa đơn ngẫu nhiên
        for ($i = 0; $i < 10; $i++) {
            DB::table('ndk_HOA_DON')->insert([
                'ndkMaHoaDon' => 'HD' . str_pad($i + 1, 3, '0', STR_PAD_LEFT), // Tạo mã hóa đơn
                'ndkMaKhachHang' => $faker->numberBetween(1, 10), // Khách hàng ngẫu nhiên từ 1 đến 10
                'ndkNgayHoaDon' => $faker->date($format = 'Y/m/d', $max = 'now'), // Ngày hóa đơn
                'ndkNgayNhan' => $faker->date($format = 'Y/m/d', $max = 'now'), // Ngày nhận hàng
                'ndkHoTenKhachHang' => $faker->name, // Tên khách hàng ngẫu nhiên
                'ndkEmail' => $faker->safeEmail, // Email ngẫu nhiên
                'ndkDienThoai' => $faker->phoneNumber, // Số điện thoại ngẫu nhiên
                'ndkDiaChi' => $faker->address, // Địa chỉ ngẫu nhiên
                'ndkTongGiaTri' => $faker->numberBetween(100000, 1000000), // Tổng giá trị ngẫu nhiên
                'ndkTrangThai' => $faker->numberBetween(0, 2), // Trạng thái hóa đơn ngẫu nhiên (0, 1, 2)
            ]);
        }
    }
}
