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
        Schema::create('ndk_san_pham', function (Blueprint $table) {
            $table->string('ndkMaSP')->primary();  
            $table->string('ndkTenSP');
            $table->string('ndkHinhAnh');
            $table->integer('ndkSoLuong');
            $table->decimal('ndkDonGia', 10, 2);
            $table->string('ndkMaLoai')->unique();
            $table->tinyInteger('ndkTrangThai')->default(0);
            $table->foreign('ndkMaLoai')->references('ndkMaLoai')->on('ndk_loai_san_pham');
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
