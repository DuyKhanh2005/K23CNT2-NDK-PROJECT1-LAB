
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
        Schema::create('ndk_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table->string('ndkMaKhachHang',255)->unique();
            $table->string('ndkHoTenKhachHang',255);
            $table->string('ndkEmail',255);
            $table->string('ndkMatKhau',255);
            $table->string('ndkDienThoai',255);
            $table->string('ndkDiaChi',255);
            $table->date('ndkNgayDangKy');
            $table->tinyInteger('ndkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ndk_KHACH_HANG');
    }
};
