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
        $ndkMatKhau = Hash::make('123456789@@'); // Mã hóa mật khẩu

        DB::table('ndk_QUAN_TRI')->insert([
            'ndkTaiKhoan' => 'duykhanhduong088@gmail.com',
            'ndkMatKhau' => $ndkMatKhau,
            'ndkTrangThai' => 0
        ]);

        DB::table('ndk_QUAN_TRI')->insert([
            'ndkTaiKhoan' => '0345865380',
            'ndkMatKhau' => $ndkMatKhau,
            'ndkTrangThai' => 0
        ]);
    }
}