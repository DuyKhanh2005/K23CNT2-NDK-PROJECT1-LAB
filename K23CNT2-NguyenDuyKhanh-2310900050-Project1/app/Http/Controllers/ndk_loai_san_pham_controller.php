<?php

namespace App\Http\Controllers;

use App\Models\ndk_loai_san_pham;
use Illuminate\Http\Request;

class ndk_loai_san_pham_controller extends Controller
{
    #List
    // Hiển thị danh sách sản phẩm
    public function ndkList()
    {
        $ndkLoaiSanPham = ndk_loai_san_pham::all(); // Lấy tất cả sản phẩm từ database
        return view('ndkAdmins.ndkloaisanpham.ndk-list', ['ndkLoaiSanPham' => $ndkLoaiSanPham]);
    }

    public function show($ndkMaLoai)
    {
        // Truy vấn sản phẩm dựa trên ndkMaLoai
        $sanPham = ndk_loai_san_pham::where('ndkMaLoai', $ndkMaLoai)->firstOrFail();
    
        // Trả về view chi tiết sản phẩm
        return view('ndkAdmins.ndkloaisanpham.ndk-show', ['sanPham' => $sanPham]);
    }
    
    // app/Http/Controllers/ndk_loai_san_pham_controller.php
    public function ndkCreate()
    {
        return view('ndkAdmins.ndkloaisanpham.ndk-create');
    }    
}
