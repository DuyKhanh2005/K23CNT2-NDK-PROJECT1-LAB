<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ndkLoaiSanPham extends Model
{
    use HasFactory;

    protected $table="NDK_LoaiSanPham";
    protected $fillable = [
        'ndkMaLoai',
        'ndkTenLoai',
        'ndkTrangThai',
    ];
}