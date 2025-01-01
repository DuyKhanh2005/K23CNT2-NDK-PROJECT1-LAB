<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ndk_SAN_PHAM; 
use App\Models\ndk_LOAI_SAN_PHAM;
use Illuminate\Support\Facades\Storage;

class ndk_SAN_PHAMController extends Controller
{
    // search
    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = $search
            ? ndk_SAN_PHAM::where('ndkTenSanPham', 'like', '%' . $search . '%')->paginate(10)
            : ndk_SAN_PHAM::paginate(10);

        return view('ndkuser.search', compact('products', 'search'));
    }

    // search 1
    public function search1(Request $request)
    {
        $search = $request->input('search');
        $products = $search
            ? ndk_SAN_PHAM::where('ndkTenSanPham', 'like', '%' . $search . '%')->paginate(10)
            : ndk_SAN_PHAM::paginate(10);

        return view('ndkuser.search1', compact('products', 'search'));
    }

    // search Admin
        public function searchAdmins(Request $request)
    {
        $search = $request->input('search');  // Lấy từ khóa tìm kiếm

        // Kiểm tra nếu có từ khóa tìm kiếm, nếu có sẽ lọc theo tên sản phẩm, nếu không thì hiển thị tất cả sản phẩm
        $products = $search
            ? ndk_SAN_PHAM::where('ndkTenSanPham', 'like', '%' . $search . '%')->paginate(10)
            : ndk_SAN_PHAM::paginate(10);  // Hiển thị tất cả sản phẩm nếu không có từ khóa tìm kiếm

        // Trả về view với các sản phẩm và từ khóa tìm kiếm (để hiển thị lại từ khóa tìm kiếm trên trang)
        return view('ndkAdmins.ndksanpham.ndk-search', compact('products', 'search'));
    }

    // List sản phẩm
    public function ndkList()
    {
        $ndksanpham = ndk_SAN_PHAM::where('ndkTrangThai', 0)->paginate(5);
        return view('ndkAdmins.ndksanpham.ndk-list', ['ndksanphams' => $ndksanpham]);
    }

    // Chi tiết sản phẩm
    public function ndkDetail($id)
    {
        $ndksanpham = ndk_SAN_PHAM::findOrFail($id);
        return view('ndkAdmins.ndksanpham.ndk-detail', ['ndksanpham' => $ndksanpham]);
    }

    // Tạo sản phẩm
    public function ndkCreate()
    {
        $ndkloaisanpham = ndk_LOAI_SAN_PHAM::all();
        return view('ndkAdmins.ndksanpham.ndk-create', ['ndkloaisanpham' => $ndkloaisanpham]);
    }

    // Xử lý form tạo sản phẩm
    public function ndkCreateSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'ndkMaSanPham' => 'required|unique:ndk_SAN_PHAM,ndkMaSanPham',
            'ndkTenSanPham' => 'required|string|max:255',
            'ndkHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'ndkSoLuong' => 'required|numeric|min:1',
            'ndkDonGia' => 'required|numeric',
            'ndkMaLoai' => 'required|exists:ndk_LOAI_SAN_PHAM,id',
            'ndkTrangThai' => 'required|in:0,1',
        ]);

        $ndksanpham = new ndk_SAN_PHAM;
        $ndksanpham->ndkMaSanPham = $request->ndkMaSanPham;
        $ndksanpham->ndkTenSanPham = $request->ndkTenSanPham;

        if ($request->hasFile('ndkHinhAnh')) {
            $file = $request->file('ndkHinhAnh');
            if ($file->isValid()) {
                $fileName = $request->ndkMaSanPham . '.' . $file->extension();
                $file->storeAs('public/img/san_pham', $fileName);
                $ndksanpham->ndkHinhAnh = 'img/san_pham/' . $fileName;
            }
        }

        $ndksanpham->ndkSoLuong = $request->ndkSoLuong;
        $ndksanpham->ndkDonGia = $request->ndkDonGia;
        $ndksanpham->ndkMaLoai = $request->ndkMaLoai;
        $ndksanpham->ndkTrangThai = $request->ndkTrangThai;
        $ndksanpham->save();

        return redirect()->route('ndkadims.ndksanpham')->with('success', 'Sản phẩm đã được thêm thành công!');
    }

    // Xóa sản phẩm
    public function ndkdelete($id)
    {
        ndk_SAN_PHAM::where('id', $id)->delete();
        return back()->with('sanpham_deleted', 'Đã xóa Sản Phẩm thành công!');
    }

    // Sửa sản phẩm
    public function ndkEdit($id)
    {
        $ndksanpham = ndk_SAN_PHAM::findOrFail($id);
        $ndkloaisanpham = ndk_LOAI_SAN_PHAM::all();
        return view('ndkAdmins.ndksanpham.ndk-edit', [
            'ndksanpham' => $ndksanpham,
            'ndkloaisanpham' => $ndkloaisanpham
        ]);
    }

    // Xử lý chỉnh sửa sản phẩm
    public function ndkEditSubmit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'ndkMaSanPham' => 'required|max:20',
            'ndkTenSanPham' => 'required|max:255',
            'ndkHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ndkSoLuong' => 'required|integer',
            'ndkDonGia' => 'required|numeric',
            'ndkMaLoai' => 'required|max:10',
            'ndkTrangThai' => 'required|in:0,1',
        ]);

        $ndksanpham = ndk_SAN_PHAM::findOrFail($id);
        $ndksanpham->ndkMaSanPham = $request->ndkMaSanPham;
        $ndksanpham->ndkTenSanPham = $request->ndkTenSanPham;
        $ndksanpham->ndkSoLuong = $request->ndkSoLuong;
        $ndksanpham->ndkDonGia = $request->ndkDonGia;
        $ndksanpham->ndkMaLoai = $request->ndkMaLoai;
        $ndksanpham->ndkTrangThai = $request->ndkTrangThai;

        if ($request->hasFile('ndkHinhAnh')) {
            if ($ndksanpham->ndkHinhAnh && Storage::disk('public')->exists('img/san_pham/' . $ndksanpham->ndkHinhAnh)) {
                Storage::disk('public')->delete('img/san_pham/' . $ndksanpham->ndkHinhAnh);
            }
            $imagePath = $request->file('ndkHinhAnh')->store('img/san_pham', 'public');
            $ndksanpham->ndkHinhAnh = $imagePath;
        }

        $ndksanpham->save();

        return redirect()->route('ndkadims.ndksanpham')->with('success', 'Sản phẩm đã được cập nhật thành công.');
    }
}
