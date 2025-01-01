<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\ndk_SAN_PHAM; 
use App\Models\ndk_KHACH_HANG; 
use App\Models\ndk_TIN_TUC; 
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
            $ttCount = ndk_TIN_TUC::count();

        
            // Trả về view và truyền cả productCount và userCount
            return view('ndkAdmins.ndkdanhsachquantri.ndkdanhmuc', compact('productCount', 'userCount','ttCount'));
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
        

        public function tintuc()
        {
            // Retrieve all news articles from the database (assuming you have a model named ndk_TIN_TUC)
            $ndktintucs = ndk_TIN_TUC::all();  // Fetching all articles
        
            // Loop through articles and add the full URL to the image
            foreach ($ndktintucs as $article) {
                // Assuming ndkHinhAnh stores the image name, we'll prepend the 'public/storage' path
                $article->image_url = asset('storage/' . $article->ndkHinhAnh);
            }
        
            // Return the view and pass the articles to it
            return view('ndkAdmins.ndkdanhsachquantri.ndkdanhmuc.ndktintuc', [
                'ndktintucs' => $ndktintucs, // Passing the news articles to the view
            ]);
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