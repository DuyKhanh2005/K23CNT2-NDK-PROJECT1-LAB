<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Thêm dòng này
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;

class ndk_KHACH_HANG extends Authenticatable // Kế thừa từ Authenticatable
{
    use HasFactory;


    protected $table = 'ndk_KHACH_HANG';
    protected $primaryKey = 'ndkMaKhachHang'; // Đảm bảo rằng ndkMaKhachHang là khóa chính

    protected $fillable = [
        'ndkMaKhachHang', 'ndkHoTenKhachHang', 'ndkEmail', 'ndkMatKhau', 
        'ndkDienThoai', 'ndkDiaChi', 'ndkNgayDangKy', 'ndkTrangThai'
    ];

    public $incrementing = false; // Nếu ndkMaKhachHang không tự tăng thì bạn cần đặt false
    public $timestamps = true;

    protected $dates = ['ndkNgayDangKy'];

    public function setndkMatKhauAttribute($value)
{
    if (!empty($value)) {
        $this->attributes['ndkMatKhau'] = Hash::make($value);
    }
}

    
}