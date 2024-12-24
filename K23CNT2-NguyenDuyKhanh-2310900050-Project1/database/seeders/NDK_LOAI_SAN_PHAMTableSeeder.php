<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NDK_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Xóa bản ghi cũ với mã loại 'DT01' và chèn bản ghi mới
        DB::table('NDK_LOAI_SAN_PHAM')->where('ndkMaLoai', 'DT01')->delete();
        DB::table('NDK_LOAI_SAN_PHAM')->insert([
            'ndkMaLoai' => 'DT01',
            'ndkTenLoai' => 'Honda',
            'ndkTrangThai' => 0
        ]);

        // Xóa bản ghi cũ với mã loại 'LT02' và chèn bản ghi mới
        DB::table('NDK_LOAI_SAN_PHAM')->where('ndkMaLoai', 'LT02')->delete();
        DB::table('NDK_LOAI_SAN_PHAM')->insert([
            'ndkMaLoai' => 'LT02',
            'ndkTenLoai' => 'Yamaha',
            'ndkTrangThai' => 0
        ]);

        // Xóa bản ghi cũ với mã loại 'PK03' và chèn bản ghi mới
        DB::table('NDK_LOAI_SAN_PHAM')->where('ndkMaLoai', 'PK03')->delete();
        DB::table('NDK_LOAI_SAN_PHAM')->insert([
            'ndkMaLoai' => 'PK03',
            'ndkTenLoai' => 'Harley',
            'ndkTrangThai' => 0
        ]);
    }
}
