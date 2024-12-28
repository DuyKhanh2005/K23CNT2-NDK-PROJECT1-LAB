<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ndk_quantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ndk_quan_tri')->insert([
            'ndkTaikhoan' => 'nguyenduykhanh',
            'ndkMatkhau' => '123456a@',
            'ndkTrangthai' => 0,
        ]);
    }
}
