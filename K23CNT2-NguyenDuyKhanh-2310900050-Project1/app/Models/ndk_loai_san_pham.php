<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ndk_loai_san_pham extends Model
{
    use HasFactory;

    protected $table = 'ndk_loai_san_pham';

    // Chỉ định cột khóa chính
    protected $primaryKey = 'ndkMaLoai';  // Khóa chính là 'ndkMaLoai'
}
