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
        Schema::create('NDK_QUAN_TRI', function (Blueprint $table) {
            $table->id(); // Tự động thêm cột id với primary key
            $table->string('ndkTaikhoan',255)->unique(); // Tài khoản, không trùng lặp
            $table->string('ndkMatkhau',255); // Mật khẩu
            $table->tinyInteger('ndkTrangthai')->default(0); // Trạng thái
            $table->timestamps(); // Thêm created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NDK_QUAN_TRI');
    }
};
