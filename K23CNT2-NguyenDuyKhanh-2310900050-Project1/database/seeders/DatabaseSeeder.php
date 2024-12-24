<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
{
    $this->call(NDK_LOAI_SAN_PHAMTableSeeder::class);
    $this->call(NDK_SAN_PHAMTableSeeder::class);
    $this->call(NDK_QUAN_TRI::class);
}

}