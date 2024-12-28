<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            ndk_QUAN_TRITableSeeder::class,
            ndk_LOAI_SAN_PHAMTableSeeder::class,
            ndk_SAN_PHAMTableSeeder::class,
            ndk_KHACH_HANGTableSeeder::class,
            ndk_HOA_DONTableSeeder::class,
            ndk_CT_HOA_DONTableSeeder::class

        ]);
        
    }
}