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
        Schema::create('ndkCTHD', function (Blueprint $table) {
            $table->id();
            $table -> bigInteger('ndkHoaDonID') -> references('id') -> on('ndkHoaDon');
            $table -> bigInteger('ndkSanPhamID') -> references('id') -> on('ndkSanPham');
            $table -> integer('ndkSLMua');
            $table -> float('ndkDonGiaMua');
            $table -> float('ndkThanhTien');
            $table -> tinyInteger('ndkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NDK_CT_HoaDon');
    }
};
