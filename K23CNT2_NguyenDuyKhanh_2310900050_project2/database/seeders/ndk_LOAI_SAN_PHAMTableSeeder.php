<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ndk_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ndk_LOAI_SAN_PHAM')->insert([
            'ndkMaLoai'=>'L001',
            'ndkTenLoai'=>'Cây Cảnh Văn Phòng',
            'ndkTrangThai'=>0
        ]);
        DB::table('ndk_LOAI_SAN_PHAM')->insert([
            'ndkMaLoai'=>'L002',
            'ndkTenLoai'=>'Cây Để Bàn',
            'ndkTrangThai'=>0
        ]);
        DB::table('ndk_LOAI_SAN_PHAM')->insert([
            'ndkMaLoai'=>'L003',
            'ndkTenLoai'=>'Cây Cảnh Phong Thủy',
            'ndkTrangThai'=>0
        ]);
        DB::table('ndk_LOAI_SAN_PHAM')->insert([
            'ndkMaLoai'=>'L004',
            'ndkTenLoai'=>'Cây Thủy Canh',
            'ndkTrangThai'=>0 
        ]);
    }
}