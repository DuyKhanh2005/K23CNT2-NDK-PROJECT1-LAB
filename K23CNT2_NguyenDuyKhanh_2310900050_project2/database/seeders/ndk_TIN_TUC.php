<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ndk_TIN_TUC extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Insert 10 rows of fake data into the 'ndk_TIN_TUC' table
        for ($i = 0; $i < 10; $i++) {
            DB::table('ndk_TIN_TUC')->insert([
                'ndkMaTT' => $faker->unique()->word, // Unique identifier for the news article
                'ndkTieuDe' => $faker->sentence, // Title of the news article
                'ndkMoTa' => $faker->text(200), // Description (shorter text)
                'ndkNoiDung' => $faker->paragraph(5), // Content (longer text)
                'ndkNgayDangTin' => $faker->dateTimeThisYear(), // Random date/time within the current year
                'ndkNgayCapNhap' => $faker->dateTimeThisYear(), // Random date/time within the current year
                'ndkHinhAnh' => $faker->imageUrl(), // Random image URL
                'ndkTrangThai' => $faker->numberBetween(0, 1), // Status (0 or 1, assuming binary status)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}