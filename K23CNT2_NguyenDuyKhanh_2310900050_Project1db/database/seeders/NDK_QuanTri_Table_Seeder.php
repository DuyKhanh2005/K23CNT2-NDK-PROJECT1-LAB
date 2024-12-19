<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NDK_QuanTri_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ndkMatkhau = md5("12345678");
        DB::table('ndk_quan_tri')->insert([
            'ndkTaikhoan'=>"duykahnhduong088@gmail.com",
            'ndkMatkhau'=>$ndkMatkhau,
            'ndkTrangthai'=>0
        ]);
        DB::table('ndk_quan_tri')->insert([
            'ndkTaikhoan'=>"0345865380",
            'ndkMatkhau'=>$ndkMatkhau,
            'ndkTrangthai'=>0
        ]);
    }
}
