<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ndk_SAN_PHAM', function (Blueprint $table) {
            $table->text('ndkMoTa');  // Thêm cột 'ndkMoTa'
        });
    }

    public function down(): void
    {
        Schema::table('ndk_SAN_PHAM', function (Blueprint $table) {
            $table->dropColumn('ndkMoTa');
        });
    }
};
