<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ndk_KHACH_HANG; 
class ndk_KHACH_HANGcontroller extends Controller
{
    //
    // CRUD
    // list
    public function ndkList()
    {
        $khachhangs = ndk_KHACH_HANG::all();
        return view('ndkAdmins.ndkkhachhang.ndk-list',['khachhangs'=>$khachhangs]);
    }
    // detail 
    public function ndkDetail($id)
    {
        $ndkkhachhang = ndk_KHACH_HANG::where('id',$id)->first();
        return view('ndkAdmins.ndkkhachhang.ndk-detail',['ndkkhachhang'=>$ndkkhachhang]);
    }
    // create
    public function ndkCreate()
    {
        return view('ndkAdmins.ndkkhachhang.ndk-create');
    }
    //post
    public function ndkCreateSubmit(Request $request)
    {
        $validate = $request->validate([
            'ndkMaKhachHang' => 'required|unique:ndk_khach_hang,ndkMaKhachHang',
            'ndkHoTenKhachHang' => 'required|string',
            'ndkEmail' => 'required|email|unique:ndk_khach_hang,ndkEmail',  
            'ndkMatKhau' => 'required|min:6',
            'ndkDienThoai' => 'required|numeric|unique:ndk_khach_hang,ndkDienThoai',  
            'ndkDiaChi' => 'required|string',
            'ndkNgayDangKy' => 'required|date',  
            'ndkTrangThai' => 'required|in:0,1,2',
        ]);

        $ndkkhachhang = new ndk_KHACH_HANG;
        $ndkkhachhang->ndkMaKhachHang = $request->ndkMaKhachHang;
        $ndkkhachhang->ndkHoTenKhachHang = $request->ndkHoTenKhachHang;
        $ndkkhachhang->ndkEmail = $request->ndkEmail;
        $ndkkhachhang->ndkMatKhau = $request->ndkMatKhau;
        $ndkkhachhang->ndkDienThoai = $request->ndkDienThoai;
        $ndkkhachhang->ndkDiaChi = $request->ndkDiaChi;
        $ndkkhachhang->ndkNgayDangKy = $request->ndkNgayDangKy;
        $ndkkhachhang->ndkTrangThai = $request->ndkTrangThai;

        $ndkkhachhang->save();

        return redirect()->route('ndkadmins.ndkkhachhang');


    }

    // edit
    public function ndkEdit($id)
    {
        // Lấy khách hàng theo id
        $ndkkhachhang = ndk_KHACH_HANG::where('id', $id)->first();
    
        // Kiểm tra nếu khách hàng không tồn tại
        if (!$ndkkhachhang) {
            return redirect()->route('ndkadmins.ndkkhachhang')->with('error', 'Khách hàng không tồn tại!');
        }
    
        // Trả về view để chỉnh sửa khách hàng
        return view('ndkAdmins.ndkkhachhang.ndk-edit', ['ndkkhachhang' => $ndkkhachhang]);
    }
    
    public function ndkEditSubmit(Request $request, $id)
    {
        // Xác thực dữ liệu
        $validate = $request->validate([
            'ndkMaKhachHang' => 'required|unique:ndk_khach_hang,ndkMaKhachHang,' . $id, // Bỏ qua kiểm tra unique cho bản ghi hiện tại
            'ndkHoTenKhachHang' => 'required|string',
            'ndkEmail' => 'required|email|unique:ndk_khach_hang,ndkEmail,' . $id,  // Bỏ qua kiểm tra unique cho bản ghi hiện tại
            'ndkMatKhau' => 'nullable|min:6', // Mật khẩu không bắt buộc khi cập nhật
            'ndkDienThoai' => 'required|numeric|unique:ndk_khach_hang,ndkDienThoai,' . $id,  // Bỏ qua kiểm tra unique cho bản ghi hiện tại
            'ndkDiaChi' => 'required|string',
            'ndkNgayDangKy' => 'required|date',
            'ndkTrangThai' => 'required|in:0,1,2',
        ]);
    
        // Lấy khách hàng theo id
        $ndkkhachhang = ndk_KHACH_HANG::where('id', $id)->first();
    
        // Kiểm tra nếu khách hàng không tồn tại
        if (!$ndkkhachhang) {
            return redirect()->route('ndkadmins.ndkkhachhang')->with('error', 'Khách hàng không tồn tại!');
        }
    
        // Cập nhật các giá trị từ request
        $ndkkhachhang->ndkMaKhachHang = $request->ndkMaKhachHang;
        $ndkkhachhang->ndkHoTenKhachHang = $request->ndkHoTenKhachHang;
        $ndkkhachhang->ndkEmail = $request->ndkEmail;
        $ndkkhachhang->ndkMatKhau = $request->ndkMatKhau;
        $ndkkhachhang->ndkDienThoai = $request->ndkDienThoai;
        $ndkkhachhang->ndkDiaChi = $request->ndkDiaChi;
        $ndkkhachhang->ndkNgayDangKy = $request->ndkNgayDangKy;
        $ndkkhachhang->ndkTrangThai = $request->ndkTrangThai;
    
        // Lưu khách hàng đã cập nhật
        $ndkkhachhang->save();
    
        // Chuyển hướng đến danh sách khách hàng
        return redirect()->route('ndkadmins.ndkkhachhang')->with('success', 'Cập nhật khách hàng thành công!');
    }
    
    //delete
    public function ndkDelete($id)
    {
        ndk_KHACH_HANG::where('id',$id)->delete();
        return back()->with('khachhang_deleted','Đã xóa Khách hàng thành công!');
    }

}