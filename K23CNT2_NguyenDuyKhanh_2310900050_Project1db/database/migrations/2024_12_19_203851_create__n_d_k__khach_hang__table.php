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
        Schema::create('ndkKhachHang', function (Blueprint $table) {
            $table->id();
            $table -> string('ndkMaKH',255)->unique();
            $table -> string('ndkTenKH',255);
            $table -> string('ndkEmail',255);
            $table -> string('ndkMatKhau',255);
            $table -> string('ndkDienThoai',255);
            $table -> string('ndkDiaChi',255);
            $table -> date('ndkNgayDK');
            $table -> tinyInteger('ndkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NDK_KhachHang');
    }
};
