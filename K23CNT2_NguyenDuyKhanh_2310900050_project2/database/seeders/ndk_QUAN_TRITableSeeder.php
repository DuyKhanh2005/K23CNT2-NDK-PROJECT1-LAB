<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Thêm dòng này

class ndk_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mã hóa mật khẩu bằng Hash::make()
        $ndkMatKhau = Hash::make('123456789a@'); // Mã hóa mật khẩu

        // Kiểm tra nếu tài khoản đã tồn tại
    if (!DB::table('ndk_QUAN_TRI')->where('ndkTaiKhoan', 'duykhanhduong088@gmail.com')->exists()) {
        DB::table('ndk_QUAN_TRI')->insert([
            'ndkTaiKhoan' => 'duykhanhduong088@gmail.com',
            'ndkMatKhau' => $ndkMatKhau,
            'ndkTrangThai' => 0
        ]);
}

        DB::table('ndk_QUAN_TRI')->insert([
            'ndkTaiKhoan' => '0345865380',
            'ndkMatKhau' => $ndkMatKhau,
            'ndkTrangThai' => 0
        ]);

        DB::table('ndk_QUAN_TRI')->insert([
            'ndkTaiKhoan' => 'newuser@example.com',  // Thay đổi tài khoản
            'ndkMatKhau' => $ndkMatKhau,
            'ndkTrangThai' => 0
        ]);
        
    }
}