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
        Schema::create('ndkHoaDon', function (Blueprint $table) {
            $table->id();
            $table -> string('ndkMaHD',255)->unique();
            $table -> bigInteger('ndkMaKH') -> references('id') -> on('ndkKhachHang');
            $table -> date('ndkNgayHD');
            $table -> string('ndkHoTenKH');
            $table -> string('ndkEmail');
            $table -> string('ndkDienThoai');
            $table -> string('ndkDiaChi');
            $table -> float('ndkTongGT');
            $table -> tinyInteger('ndkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NDK_HoaDon');
    }
};
