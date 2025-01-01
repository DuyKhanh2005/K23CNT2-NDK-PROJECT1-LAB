<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ndk_SAN_PHAM extends Model
{
    use HasFactory;

    // Tên bảng trong cơ sở dữ liệu
   
    protected $table = 'ndk_SAN_PHAM';
    protected $primaryKey = 'id';
    public $timestamps = true;

    
    // Các trường có thể được gán hàng loạt
    protected $fillable = [
        'ndkMaSanPham',
        'ndkTenSanPham',
        'ndkHinhAnh',
        'ndkSoLuong',
        'ndkDonGia',
        'ndkMaLoai',
        'ndkMoTa',
        'ndkTrangThai',
    ];
    public function chiTietHoaDon()
    {
        return $this->hasMany(ndk_CT_HOA_DON::class, 'ndkSanPhamID','id');
    }
   

}