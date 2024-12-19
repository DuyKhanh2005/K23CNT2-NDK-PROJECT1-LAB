<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ndkSanPham', function (Blueprint $table) {
            $table->id();
            $table -> string('ndkMaSP',255)->unique();
            $table -> string('ndkTenSP',255);
            $table -> string('ndkHinhAnh',255);
            $table -> integer('ndkSoLuong');
            $table -> float('ndkDonGia');
            $table -> bigInteger('ndkMaLoai')->references('id')-> on('ndkLoaiSanPham');
            $table -> tinyInteger('ndkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ndk_san_pham');
    }
};
