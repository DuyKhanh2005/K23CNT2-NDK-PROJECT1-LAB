<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NDK_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ndkMatKhau = md5('123456@a');
        DB::table('ndkQuanTri') -> insert([
            'ndkTaiKhoan' => "duonduykhanh088@gmail.com",
            'ndkMatKhau' => $nvkMatKhau,
            'ndkTrangThai' =>0 
        ]); 
        DB::table('ndkQuanTri') -> insert([
            'ndkTaiKhoan' => "2310900050",
            'ndkMatKhau' => $ndkMatKhau,
            'ndkTrangThai' =>0 
        ]);
    }
}
