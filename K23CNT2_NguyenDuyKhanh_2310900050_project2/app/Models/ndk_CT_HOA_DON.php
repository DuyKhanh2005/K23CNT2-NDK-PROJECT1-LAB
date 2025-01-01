<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ndk_CT_HOA_DON extends Model
{
    use HasFactory;

    // Đặt tên bảng nếu khác mặc định
    protected $table = 'ndk_CT_HOA_DON';  // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'id';  // Xác định khóa chính của bảng (mặc định là 'id')

    public $timestamps = true;  // Laravel tự động quản lý các cột created_at và updated_at

    // Các trường có thể được gán hàng loạt
    protected $fillable = [
       'ndkHoaDonID',   // Đảm bảo có trường ndkHoaDonID ở đây
        'ndkSanPhamID',
        'ndkSoLuongMua',
        'ndkDonGiaMua',
        'ndkThanhTien',
        'ndkTrangThai',
    ];

    // Quan hệ giữa bảng ndk_CT_HOA_DON và bảng ndk_SAN_PHAM
 // Quan hệ với bảng ndk_HOA_DON
public function hoaDon()
{
    return $this->belongsTo(ndk_HOA_DON::class, 'ndkHoaDonID', 'id');
}

// Quan hệ với bảng ndk_SAN_PHAM
public function sanPham()
{
    return $this->belongsTo(ndk_SAN_PHAM::class, 'ndkSanPhamID', 'id');
}

}