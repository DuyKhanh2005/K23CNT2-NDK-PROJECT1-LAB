<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('NDK_SAN_PHAM', function (Blueprint $table) {
            // Sử dụng tự động tăng (auto-increment) cho khóa chính
            $table->id();  // Tạo trường id tự động tăng
            $table->string('ndkMaSP')->unique();  // Đảm bảo mã sản phẩm là duy nhất
            $table->string('ndkTenSP');
            $table->string('ndkHinhAnh');
            $table->integer('ndkSoLuong');
            $table->decimal('ndkDonGia', 10, 2);  // Thêm độ chính xác cho giá trị
            $table->string('ndkMaLoai');
            $table->boolean('ndkTrangThai')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('NDK_SAN_PHAM');
    }
};
