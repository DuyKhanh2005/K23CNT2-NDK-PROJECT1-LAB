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
            $table->id();
            $table->string('ndkTaikhoan',250)->unique();
            $table->string('ndkMatkhau',250);
            $table->tinyInteger('ndkTrangthai');
            $table->timestamps();
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
