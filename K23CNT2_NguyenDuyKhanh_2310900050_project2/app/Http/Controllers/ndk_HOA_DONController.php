<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ndk_HOA_DON; 
use App\Models\ndk_KHACH_HANG; 
class ndk_HOA_DONController extends Controller
{
    //
      //admin CRUD
    // list -----------------------------------------------------------------------------------------------------------------------------------------
    public function ndkList()
    {
        $ndkhoadon = ndk_HOA_DON::all();
        return view('ndkAdmins.ndkhoadon.ndk-list',['ndkhoadon'=>$ndkhoadon]);
    }
    // detail -----------------------------------------------------------------------------------------------------------------------------------------
    public function ndkDetail($id)
    {
        // Tìm sản phẩm theo ID
        $ndkhoadon = ndk_HOA_DON::where('id', $id)->first();

        // Trả về view và truyền thông tin sản phẩm
        return view('ndkAdmins.ndkhoadon.ndk-detail', ['ndkhoadon' => $ndkhoadon]);
    }
    // create
    public function ndkCreate()
    {
        $ndkkhachhang = ndk_KHACH_HANG::all();
        return view('ndkAdmins.ndkhoadon.ndk-create',['ndkkhachhang'=>$ndkkhachhang]);
    }
    //post
    public function ndkCreateSubmit(Request $request)
    {
        // Xác thực dữ liệu yêu cầu dựa trên các quy tắc xác thực
        $validate = $request->validate([
            'ndkMaHoaDon' => 'required|unique:ndk_hoa_don,ndkMaHoaDon',
            'ndkMaKhachHang' => 'required|exists:ndk_khach_hang,id',
            'ndkNgayHoaDon' => 'required|date',  
            'ndkNgayNhan' => 'required|date',
            'ndkHoTenKhachHang' => 'required|string',  
            'ndkEmail' => 'required|email',
            'ndkDienThoai' => 'required|numeric',  
            'ndkDiaChi' => 'required|string',  
            'ndkTongGiaTri' => 'required|numeric',  // Đã thay đổi thành numeric (cho kiểu double)
            'ndkTrangThai' => 'required|in:0,1,2',
        ]);
    
        // Tạo một bản ghi hóa đơn mới
        $ndkhoadon = new ndk_HOA_DON;
    
        // Gán dữ liệu xác thực vào các thuộc tính của mô hình
        $ndkhoadon->ndkMaHoaDon = $request->ndkMaHoaDon;
        $ndkhoadon->ndkMaKhachHang = $request->ndkMaKhachHang;  // Giả sử đây là khóa ngoại
        $ndkhoadon->ndkHoTenKhachHang = $request->ndkHoTenKhachHang;
        $ndkhoadon->ndkEmail = $request->ndkEmail;
        $ndkhoadon->ndkDienThoai = $request->ndkDienThoai;
        $ndkhoadon->ndkDiaChi = $request->ndkDiaChi;
        
        // Lưu 'ndkTongGiaTri' dưới dạng float (hoặc double) để phù hợp với kiểu dữ liệu trong cơ sở dữ liệu
        $ndkhoadon->ndkTongGiaTri = (double) $request->ndkTongGiaTri; // Chuyển đổi sang double
        
        $ndkhoadon->ndkTrangThai = $request->ndkTrangThai;
    
        // Đảm bảo định dạng đúng cho các trường ngày
        $ndkhoadon->ndkNgayHoaDon = $request->ndkNgayHoaDon;
        $ndkhoadon->ndkNgayNhan = $request->ndkNgayNhan;
    
        // Lưu bản ghi mới vào cơ sở dữ liệu
        $ndkhoadon->save();
    
        // Chuyển hướng đến danh sách hóa đơn
        return redirect()->route('ndkadmins.ndkhoadon');
    }
    


    public function ndkEdit($id)
    {
        $ndkhoadon = ndk_HOA_DON::where('id', $id)->first();
        $ndkkhachhang = ndk_KHACH_HANG::all();
        return view('ndkAdmins.ndkhoadon.ndk-edit',['ndkkhachhang'=>$ndkkhachhang,'ndkhoadon'=>$ndkhoadon]);
    }
    //post
    public function ndkEditSubmit(Request $request,$id)
    {
        // Xác thực dữ liệu yêu cầu dựa trên các quy tắc xác thực
        $validate = $request->validate([
            'ndkMaHoaDon' => 'required|unique:ndk_hoa_don,ndkMaHoaDon,'. $id,
            'ndkMaKhachHang' => 'required|exists:ndk_khach_hang,id',
            'ndkNgayHoaDon' => 'required|date',  
            'ndkNgayNhan' => 'required|date',
            'ndkHoTenKhachHang' => 'required|string',  
            'ndkEmail' => 'required|email',
            'ndkDienThoai' => 'required|numeric',  
            'ndkDiaChi' => 'required|string',  
            'ndkTongGiaTri' => 'required|numeric', 
            'ndkTrangThai' => 'required|in:0,1,2',
        ]);
    
        $ndkhoadon = ndk_HOA_DON::where('id', $id)->first();
        // Gán dữ liệu xác thực vào các thuộc tính của mô hình
        $ndkhoadon->ndkMaHoaDon = $request->ndkMaHoaDon;
        $ndkhoadon->ndkMaKhachHang = $request->ndkMaKhachHang;  // Giả sử đây là khóa ngoại
        $ndkhoadon->ndkHoTenKhachHang = $request->ndkHoTenKhachHang;
        $ndkhoadon->ndkEmail = $request->ndkEmail;
        $ndkhoadon->ndkDienThoai = $request->ndkDienThoai;
        $ndkhoadon->ndkDiaChi = $request->ndkDiaChi;
        
        // Lưu 'ndkTongGiaTri' dưới dạng float (hoặc double) để phù hợp với kiểu dữ liệu trong cơ sở dữ liệu
        $ndkhoadon->ndkTongGiaTri = (double) $request->ndkTongGiaTri; // Chuyển đổi sang double
        
        $ndkhoadon->ndkTrangThai = $request->ndkTrangThai;
    
        // Đảm bảo định dạng đúng cho các trường ngày
        $ndkhoadon->ndkNgayHoaDon = $request->ndkNgayHoaDon;
        $ndkhoadon->ndkNgayNhan = $request->ndkNgayNhan;
    
        // Lưu bản ghi mới vào cơ sở dữ liệu
        $ndkhoadon->save();
    
        // Chuyển hướng đến danh sách hóa đơn
        return redirect()->route('ndkadmins.ndkhoadon');
    }
    
        //delete
        public function ndkDelete($id)
        {
            ndk_HOA_DON::where('id',$id)->delete();
            return back()->with('hoadon_deleted','Đã xóa Khách hàng thành công!');
        }
}