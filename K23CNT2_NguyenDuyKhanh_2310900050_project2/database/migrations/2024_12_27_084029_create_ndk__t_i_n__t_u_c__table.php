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
        Schema::create('ndk_TIN_TUC', function (Blueprint $table) {
            $table->id();
            $table->string('ndkMaTT')->unique(); // Assuming 'ndkMaTT' is unique, add unique constraint if needed
            $table->string('ndkTieuDe');
            $table->text('ndkMoTa'); // 'text' type is better for longer descriptions
            $table->longText('ndkNoiDung'); // 'longText' for potentially larger content
            $table->dateTime('ndkNgayDangTin'); // Store as datetime
            $table->dateTime('ndkNgayCapNhap'); // Store as datetime
            $table->string('ndkHinhAnh');
            $table->tinyInteger('ndkTrangThai'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ndk_TIN_TUC');
    }
};