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
        Schema::create('ndk_loai_san_pham', function (Blueprint $table) {
            $table->string('ndkMaLoai')->primary();
            $table->string('ndkTenLoai');
            $table->tinyInteger('ndkTrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ndk_loai_san_pham');
    }
};
