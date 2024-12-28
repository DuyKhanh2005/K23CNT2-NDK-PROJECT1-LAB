<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\ndk_SAN_PHAM; 
use App\Models\ndk_KHACH_HANG; 
class ndk_DANH_SACH_QUAN_TRIController extends Controller
{
    //
        // Danh mục
        public function danhmuc()
        {
            // Truy vấn số lượng sản phẩm
            $productCount = ndk_SAN_PHAM::count();
        
            // Truy vấn số lượng người dùng
            $userCount = ndk_KHACH_HANG::count();

        
            // Trả về view và truyền cả productCount và userCount
            return view('ndkAdmins.ndkdanhsachquantri.ndkdanhmuc', compact('productCount', 'userCount'));
        }

        public function nguoidung()
        {
            $ndknguoidung = ndk_KHACH_HANG::all();
        
            // Chuyển đổi ndkNgayDangKy thành đối tượng Carbon thủ công
            foreach ($ndknguoidung as $user) {
                // Chuyển đổi ngày tháng thành đối tượng Carbon nếu chưa phải là Carbon
                $user->ndkNgayDangKy = Carbon::parse($user->ndkNgayDangKy);
            }
        
            return view('ndkAdmins.ndkdanhsachquantri.ndkdanhmuc.ndknguoidung', ['ndknguoidung' => $ndknguoidung]);
        }
        

    // tin tức
    public function tintuc()
    {
        
        $ndksanphams = ndk_SAN_PHAM::all();
        return view('ndkAdmins.ndkdanhsachquantri.ndkdanhmuc.ndktintuc',['ndksanphams'=>$ndksanphams]);
    }

    // Hiển thị danh sách sản phẩm
    public function sanpham()
    {
        $ndksanphams = ndk_SAN_PHAM::all(); // Lấy tất cả sản phẩm
        return view('ndkAdmins.ndkdanhsachquantri.ndkdanhmuc.ndksanpham', ['ndksanphams' => $ndksanphams]);
    }

    // Hiển thị mô tả chi tiết sản phẩm
    public function mota($id)
    {
        // Lấy sản phẩm theo id
        $product = ndk_SAN_PHAM::find($id);
        
        // Kiểm tra nếu sản phẩm không tồn tại
        if (!$product) {
            return redirect()->route('ndkAdmins.ndkdanhsachquantri.danhmuc.sanpham')
                             ->with('error', 'Sản phẩm không tồn tại.');
        }

        // Trả về view với thông tin sản phẩm
        return view('ndkAdmins.ndkdanhsachquantri.ndkdanhmuc.ndkmota', ['product' => $product]);
    }
}