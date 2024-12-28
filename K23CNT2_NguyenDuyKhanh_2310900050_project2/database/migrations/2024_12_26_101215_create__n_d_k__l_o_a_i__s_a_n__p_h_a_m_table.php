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
        Schema::create('ndk_LOAI_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('ndkMaLoai',255)->unique();
            $table->string('ndkTenLoai',255);
            $table->tinyInteger('ndkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ndk_LOAI_SAN_PHAM');
    }
};