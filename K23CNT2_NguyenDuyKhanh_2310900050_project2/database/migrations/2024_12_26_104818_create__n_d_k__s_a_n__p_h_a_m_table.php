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
        Schema::create('ndk_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('ndkMaSanPham', 255)->unique();
            $table->string('ndkTenSanPham', 255);
            $table->string('ndkHinhAnh', 255);
            $table->integer('ndkSoLuong');
            $table->float('ndkDonGia');
            
            // Khóa ngoại ndkMaLoai
            $table->bigInteger('ndkMaLoai')->unsigned();
            $table->foreign('ndkMaLoai')->references('id')->on('ndk_LOAI_SAN_PHAM')->onDelete('cascade');
            
            $table->tinyInteger('ndkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ndk_SAN_PHAM');
    }
};
