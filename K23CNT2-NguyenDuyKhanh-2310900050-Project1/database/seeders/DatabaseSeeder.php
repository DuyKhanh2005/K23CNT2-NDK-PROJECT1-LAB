<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
{
    $this->call([
        // ndk_quantriSeeder::class,
        // ndk_loai_san_phamSeeder::class,
        NDK_SAN_PHAMtableSeeder::class,
        ndk_hoa_don::class,
        ndk_ct_hoa_don::class,
    ]);
}

}