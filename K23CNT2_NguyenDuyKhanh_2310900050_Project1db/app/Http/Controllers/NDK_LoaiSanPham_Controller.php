<?php

namespace App\Http\Controllers;

use App\Models\ndkLoaiSanPham;
use Illuminate\Http\Request;

class ndkLoaiSanPhamController extends Controller
{
    // Admin : CRUD

    // List
    public function ndkList()
    {
        $ndkLoaiSanPham = ndkLoaiSanPham::all();
        return view('ndkAdmin.ndkLoaiSanPham.List', ['ndkLoaiSanPham' => $ndkLoaiSanPham]);
    }

    // Create
    public function ndkCreate()
    {
        return view('ndkAdmin.ndkLoaiSanPham.Create');
    }

    public function ndkStore(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validated = $request->validate([
            'ndkMaLoai' => 'required|unique:ndkLoaiSanPham,ndkMaLoai|max:255',
            'ndkTenLoai' => 'required|max:255',
            'ndkTrangThai' => 'required|in:0,1', // đảm bảo giá trị đúng cho trạng thái
        ]);
    
        // Lưu vào cơ sở dữ liệu
        ndkLoaiSanPham::create([
            'ndkMaLoai' => $validated['ndkMaLoai'],
            'ndkTenLoai' => $validated['ndkTenLoai'],
            'ndkTrangThai' => $validated['ndkTrangThai'],
        ]);
        return redirect()->route('ndkAdmin.ndkLoaiSanPham.List')->with('success', 'Thêm mới loại sản phẩm thành công');
    }
    // Xem chi tiết
public function ndkShow($id)
{
    $item = ndkLoaiSanPham::where('ndkMaLoai', $id)->first(); 
    return view('ndkAdmin.ndkLoaiSanPham.Show', ['item' => $item]); 
}

// Sửa
public function ndkEdit($id)
{
    $item = ndkLoaiSanPham::where('ndkMaLoai', $id)->first(); 
    return view('ndkAdmin.ndkLoaiSanPham.Edit', compact('item')); 
}

// Cập nhật
public function ndkUpdate(Request $request, $id)
{
    $request->validate([
        'ndkTenLoai' => 'required|max:255',
        'ndkTrangThai' => 'required|in:0,1',
    ]);

    $data = $request -> only('ndkTenLoai', 'ndkTrangThai');

    ndkLoaiSanPham::where('ndkMaLoai', $id)->update($data); 

    return redirect()->route('ndkAdmin.ndkLoaiSanPham.List')->with('success', 'Cập nhật thành công!');
}

// Xóa
public function ndkDestroy($id)
{
    $item = ndkLoaiSanPham::where('ndkMaLoai', $id)->delete();
    return redirect()->route('ndkAdmin.ndkLoaiSanPham.List')->with('success', 'Xóa thành công!');
}

}    