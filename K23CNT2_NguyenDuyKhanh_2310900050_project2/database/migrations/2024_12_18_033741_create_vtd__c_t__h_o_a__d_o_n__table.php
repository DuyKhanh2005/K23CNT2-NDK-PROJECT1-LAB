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
        Schema::create('ndk_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ndkHoaDonID')->references('id')->on('ndk_HOA_DON');
            $table->bigInteger('ndkSanPhamID')->references('id')->on('ndk_SAN_PHAM');
            $table->integer('ndkSoLuongMua');
            $table->float('ndkDonGiaMua');
            $table->double('ndkThanhTien');
            $table->tinyInteger('ndkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ndk_CT_HOA_DON');
    }
};