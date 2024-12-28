<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ndk_SAN_PHAM; 
use App\Models\ndk_LOAI_SAN_PHAM; // Sử dụng Model User để thao tác với cơ sở dữ liệu
use Illuminate\Support\Facades\Storage;  // Use this for file handling
class ndk_SAN_PHAMController extends Controller
{
    //


     //admin CRUD
    // list -----------------------------------------------------------------------------------------------------------------------------------------
    public function ndkList()
    {
        $ndksanphams = ndk_SAN_PHAM::where('ndkTrangThai',0)->get();
        return view('ndkAdmins.ndksanpham.ndk-list',['ndksanphams'=>$ndksanphams]);
    } 
    // detail -----------------------------------------------------------------------------------------------------------------------------------------
    public function ndkDetail($id)
    {
        // Tìm sản phẩm theo ID
        $ndksanpham = ndk_SAN_PHAM::where('id', $id)->first();

        // Trả về view và truyền thông tin sản phẩm
        return view('ndkAdmins.ndksanpham.ndk-detail', ['ndksanpham' => $ndksanpham]);
    }

      //create  -----------------------------------------------------------------------------------------------------------------------------------------
      public function ndkCreate()
      {
            // đọc dữ liệu từ ndk_LOAI_SAN_PHAM
            $ndkloaisanpham = ndk_LOAI_SAN_PHAM::all();
          return view('ndkAdmins.ndksanpham.ndk-create',['ndkloaisanpham'=>$ndkloaisanpham]);
      }
     

     // Controller
public function ndkCreateSubmit(Request $request)
{

    // Validate input
    $validatedData = $request->validate([
        'ndkMaSanPham' => 'required|unique:ndk_SAN_PHAM,ndkMaSanPham',
        'ndkTenSanPham' => 'required|string|max:255',
        'ndkHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Kiểm tra hình ảnh và loại định dạng
        'ndkSoLuong' => 'required|numeric|min:1',
        'ndkDonGia' => 'required|numeric',
        'ndkMaLoai' => 'required|exists:ndk_LOAI_SAN_PHAM,id',
        'ndkTrangThai' => 'required|in:0,1',
    ]);

    // Khởi tạo đối tượng ndk_SAN_PHAM và lưu thông tin vào cơ sở dữ liệu
    $ndksanpham = new ndk_SAN_PHAM;
    $ndksanpham->ndkMaSanPham = $request->ndkMaSanPham;
    $ndksanpham->ndkTenSanPham = $request->ndkTenSanPham;

    // Kiểm tra nếu có tệp hình ảnh
    if ($request->hasFile('ndkHinhAnh')) {
        // Lấy tệp hình ảnh
        $file = $request->file('ndkHinhAnh');

        // Kiểm tra nếu tệp hợp lệ
        if ($file->isValid()) {
            // Tạo tên tệp dựa trên mã sản phẩm
            $fileName = $request->ndkMaSanPham . '.' . $file->extension();

            // Lưu tệp vào thư mục public/img/san_pham
            $file->storeAs('public/img/san_pham', $fileName); // Lưu tệp vào thư mục storage/app/public/img/san_pham

            // Lưu đường dẫn vào cơ sở dữ liệu
            $ndksanpham->ndkHinhAnh = 'img/san_pham/' . $fileName; // Lưu đường dẫn tương đối trong CSDL
        }
    }

    // Lưu các thông tin còn lại vào cơ sở dữ liệu
    $ndksanpham->ndkSoLuong = $request->ndkSoLuong;
    $ndksanpham->ndkDonGia = $request->ndkDonGia;
    $ndksanpham->ndkMaLoai = $request->ndkMaLoai;
    $ndksanpham->ndkTrangThai = $request->ndkTrangThai;

    // Lưu dữ liệu vào cơ sở dữ liệu
    $ndksanpham->save();

    // Chuyển hướng người dùng về trang danh sách sản phẩm
    return redirect()->route('ndkadims.ndksanpham');
}

//delete    -----------------------------------------------------------------------------------------------------------------------------------------

public function ndkdelete($id)
{
    ndk_SAN_PHAM::where('id',$id)->delete();
return back()->with('sanpham_deleted','Đã xóa Sản Phẩm thành công!');
}

// edit -----------------------------------------------------------------------------------------------------------------------------------------
public function ndkEdit($id)
    {
       // Tìm sản phẩm theo ID
    $ndksanpham = ndk_SAN_PHAM::findOrFail($id);

    // Lấy tất cả các loại sản phẩm từ bảng ndk_LOAI_SAN_PHAM
    $ndkloaisanpham = ndk_LOAI_SAN_PHAM::all();

    // Trả về view với dữ liệu sản phẩm và loại sản phẩm
    return view('ndkAdmins.ndksanpham.ndk-edit', [
        'ndksanpham' => $ndksanpham,
        'ndkloaisanpham' => $ndkloaisanpham
    ]);
    }

    // Phương thức xử lý dữ liệu form chỉnh sửa sản phẩm


    public function ndkEditSubmit(Request $request, $id)
{
    // Validate dữ liệu
    $request->validate([
        'ndkMaSanPham' => 'required|max:20',
        'ndkTenSanPham' => 'required|max:255',
        'ndkHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'ndkSoLuong' => 'required|integer',
        'ndkDonGia' => 'required|numeric',
        'ndkMaLoai' => 'required|max:10',
        'ndkTrangThai' => 'required|in:0,1',
    ]);

    // Tìm sản phẩm cần chỉnh sửa
    $ndksanpham = ndk_SAN_PHAM::findOrFail($id);

    // Cập nhật thông tin sản phẩm
    $ndksanpham->ndkMaSanPham = $request->ndkMaSanPham;
    $ndksanpham->ndkTenSanPham = $request->ndkTenSanPham;
    $ndksanpham->ndkSoLuong = $request->ndkSoLuong;
    $ndksanpham->ndkDonGia = $request->ndkDonGia;
    $ndksanpham->ndkMaLoai = $request->ndkMaLoai;
    $ndksanpham->ndkTrangThai = $request->ndkTrangThai;

    // Kiểm tra nếu có hình ảnh mới
    if ($request->hasFile('ndkHinhAnh')) {
        // Kiểm tra và xóa hình ảnh cũ nếu tồn tại
        if ($ndksanpham->ndkHinhAnh && Storage::disk('public')->exists('img/san_pham/' . $ndksanpham->ndkHinhAnh)) {
            // Xóa file cũ nếu tồn tại
            Storage::disk('public')->delete('img/san_pham/' . $ndksanpham->ndkHinhAnh);
        }
        // Lưu hình ảnh mới
        $imagePath = $request->file('ndkHinhAnh')->store('img/san_pham', 'public');
        $ndksanpham->ndkHinhAnh = $imagePath;
    }

    // Lưu thông tin sản phẩm đã chỉnh sửa
    $ndksanpham->save();

    // Redirect về trang danh sách sản phẩm
    return redirect()->route('ndkadims.ndksanpham')->with('success', 'Sản phẩm đã được cập nhật thành công.');
}

    

}