<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ndk_HOA_DON; 
use App\Models\ndk_KHACH_HANG; 
use App\Models\ndk_SAN_PHAM; 

class ndk_HOA_DONController extends Controller
{
    // Hiển thị chi tiết hóa đơn và sản phẩm
    public function show($hoaDonId, $sanPhamId)
    {
        // Lấy hóa đơn và sản phẩm từ ID
        $hoaDon = ndk_HOA_DON::findOrFail($hoaDonId);
        $sanPham = ndk_SAN_PHAM::findOrFail($sanPhamId);

        // Trả về view để hiển thị thông tin hóa đơn và sản phẩm
        return view('ndkuser.hoadonshow', compact('hoaDon', 'sanPham'));
    }

    // List hóa đơn - Admin CRUD
    public function ndkList()
    {
        // Lấy tất cả hóa đơn
        $ndkhoadons = ndk_HOA_DON::all();
        return view('ndkAdmins.ndkhoadon.ndk-list', ['ndkhoadons' => $ndkhoadons]);
    }

    // Hiển thị chi tiết hóa đơn - Admin CRUD
    public function ndkDetail($id)
    {
        // Tìm hóa đơn theo ID
        $ndkhoadon = ndk_HOA_DON::findOrFail($id);

        // Trả về view và truyền thông tin hóa đơn
        return view('ndkAdmins.ndkhoadon.ndk-detail', ['ndkhoadon' => $ndkhoadon]);
    }

    // Tạo mới hóa đơn - Admin CRUD
    public function ndkCreate()
    {
        // Lấy tất cả khách hàng
        $ndkkhachhang = ndk_KHACH_HANG::all();
        return view('ndkAdmins.ndkhoadon.ndk-create', ['ndkkhachhang' => $ndkkhachhang]);
    }

    // Xử lý khi gửi form tạo mới hóa đơn
    public function ndkCreateSubmit(Request $request)
    {
        // Xác thực dữ liệu yêu cầu
        $validated = $request->validate([
            'ndkMaHoaDon' => 'required|unique:ndk_hoa_don,ndkMaHoaDon',
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

        // Tạo mới hóa đơn
        $ndkhoadon = new ndk_HOA_DON;
        $ndkhoadon->ndkMaHoaDon = $request->ndkMaHoaDon;
        $ndkhoadon->ndkMaKhachHang = $request->ndkMaKhachHang;
        $ndkhoadon->ndkHoTenKhachHang = $request->ndkHoTenKhachHang;
        $ndkhoadon->ndkEmail = $request->ndkEmail;
        $ndkhoadon->ndkDienThoai = $request->ndkDienThoai;
        $ndkhoadon->ndkDiaChi = $request->ndkDiaChi;
        $ndkhoadon->ndkTongGiaTri = (double) $request->ndkTongGiaTri;
        $ndkhoadon->ndkTrangThai = $request->ndkTrangThai;
        $ndkhoadon->ndkNgayHoaDon = $request->ndkNgayHoaDon;
        $ndkhoadon->ndkNgayNhan = $request->ndkNgayNhan;

        // Lưu hóa đơn vào cơ sở dữ liệu
        $ndkhoadon->save();

        // Chuyển hướng về danh sách hóa đơn
        return redirect()->route('ndkadmins.ndkhoadon');
    }

    // Sửa hóa đơn - Admin CRUD
    public function ndkEdit($id)
    {
        // Lấy hóa đơn cần sửa và danh sách khách hàng
        $ndkhoadon = ndk_HOA_DON::findOrFail($id);
        $ndkkhachhang = ndk_KHACH_HANG::all();
        return view('ndkAdmins.ndkhoadon.ndk-edit', ['ndkkhachhang' => $ndkkhachhang, 'ndkhoadon' => $ndkhoadon]);
    }

    // Xử lý khi gửi form sửa hóa đơn
    public function ndkEditSubmit(Request $request, $id)
    {
        // Xác thực dữ liệu yêu cầu
        $validated = $request->validate([
            'ndkMaHoaDon' => 'required|unique:ndk_hoa_don,ndkMaHoaDon,' . $id,
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

        // Cập nhật hóa đơn
        $ndkhoadon = ndk_HOA_DON::findOrFail($id);
        $ndkhoadon->ndkMaHoaDon = $request->ndkMaHoaDon;
        $ndkhoadon->ndkMaKhachHang = $request->ndkMaKhachHang;
        $ndkhoadon->ndkHoTenKhachHang = $request->ndkHoTenKhachHang;
        $ndkhoadon->ndkEmail = $request->ndkEmail;
        $ndkhoadon->ndkDienThoai = $request->ndkDienThoai;
        $ndkhoadon->ndkDiaChi = $request->ndkDiaChi;
        $ndkhoadon->ndkTongGiaTri = (double) $request->ndkTongGiaTri;
        $ndkhoadon->ndkTrangThai = $request->ndkTrangThai;
        $ndkhoadon->ndkNgayHoaDon = $request->ndkNgayHoaDon;
        $ndkhoadon->ndkNgayNhan = $request->ndkNgayNhan;

        // Lưu cập nhật vào cơ sở dữ liệu
        $ndkhoadon->save();

        // Chuyển hướng về danh sách hóa đơn
        return redirect()->route('ndkadmins.ndkhoadon');
    }

    // Xóa hóa đơn - Admin CRUD
    public function ndkDelete($id)
    {
        // Xóa hóa đơn theo ID
        ndk_HOA_DON::where('id', $id)->delete();
        
        // Quay lại trang trước và thông báo xóa thành công
        return back()->with('hoadon_deleted', 'Đã xóa hóa đơn thành công!');
    }
}
