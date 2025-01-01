<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ndk_HOA_DON extends Model
{
    use HasFactory;

    // Đặt tên bảng nếu khác mặc định
    protected $table = 'ndk_HOA_DON';  // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'id';  // Xác định khóa chính của bảng (mặc định là 'id')

    public $timestamps = true;  // Laravel tự động quản lý các cột created_at và updated_at

    // Các trường có thể được gán hàng loạt
    protected $fillable = [
        'ndkMaHoaDon',  // Thêm trường ndkMaHoaDon vào mảng fillable
        'ndkMaKhachHang',
        'ndkNgayHoaDon',
        'ndkNgayNhan',
        'ndkHoTenKhachHang',
        'ndkEmail',
        'ndkDienThoai',
        'ndkDiaChi',
        'ndkTongGiaTri',
        'ndkTrangThai',
    ];

    // Quan hệ với bảng ndk_KHACH_HANG
    public function khachHang()
    {
        return $this->belongsTo(ndk_KHACH_HANG::class, 'ndkMaKhachHang', 'id');
    }

    // Quan hệ với bảng ndk_CT_HOA_DON
    public function chiTietHoaDon()
    {
        return $this->hasMany(ndk_CT_HOA_DON::class, 'ndkHoaDonID', 'id');
    }
    
}