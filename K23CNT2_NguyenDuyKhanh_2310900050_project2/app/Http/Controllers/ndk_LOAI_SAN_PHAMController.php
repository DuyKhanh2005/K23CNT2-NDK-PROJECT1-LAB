<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ndk_LOAI_SAN_PHAM; // Sử dụng Model User để thao tác với cơ sở dữ liệu
class ndk_LOAI_SAN_PHAMController extends Controller
{
    //admin CRUD
    // list
    public function ndkList()
    {
        $ndkloaisanphams = ndk_LOAI_SAN_PHAM::all();
        return view('ndkAdmins.ndkloaisanpham.ndk-list',['ndkloaisanphams'=>$ndkloaisanphams]);
    }

    //create
    public function ndkCreate()
    {
        return view('ndkAdmins.ndkloaisanpham.ndk-create');
    }

    public function ndkCreateSunmit(Request $request)
    {
        $validatedData = $request->validate([
            'ndkMaLoai' => 'required|unique:ndk_LOAI_SAN_PHAM,ndkMaLoai',  // Kiểm tra mã loại không trống và duy nhất
            'ndkTenLoai' => 'required|string|max:255',  // Kiểm tra tên loại không trống và là chuỗi
            'ndkTrangThai' => 'required|in:0,1',  // Trạng thái phải là 0 hoặc 1
        ]);
        //ghi dữ liệu xuống db
        $ndkloaisanpham = new ndk_LOAI_SAN_PHAM;
        $ndkloaisanpham->ndkMaLoai = $request->ndkMaLoai;
        $ndkloaisanpham->ndkTenLoai = $request->ndkTenLoai;
        $ndkloaisanpham->ndkTrangThai = $request->ndkTrangThai;

        $ndkloaisanpham->save();
       return redirect()->route('ndkadmins.ndkloaisanpham');
    }

    public function ndkEdit($id)
    {
        // Retrieve the product by the primary key (id)
        $ndkloaisanpham = ndk_LOAI_SAN_PHAM::find($id);
    
        // If the product does not exist, redirect with an error message
        if (!$ndkloaisanpham) {
            return redirect()->route('ndkadmins.ndkloaisanpham')->with('error', 'Loại sản phẩm không tồn tại.');
        }
    
        // Pass the product data to the edit view
        return view('ndkAdmins.ndkloaisanpham.ndk-edit', ['ndkloaisanpham' => $ndkloaisanpham]);
    }
    
    public function ndkEditSubmit(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'ndkMaLoai' => 'required|string|max:255|unique:ndk_LOAI_SAN_PHAM,ndkMaLoai,' . $request->id,  // Bỏ qua ndkMaLoai của bản ghi hiện tại
            'ndkTenLoai' => 'required|string|max:255',   
            'ndkTrangThai' => 'required|in:0,1',  // Validation for ndkTrangThai (0 or 1)
        ]);
    
        // Find the product by id
        $ndkloaisanpham = ndk_LOAI_SAN_PHAM::find($request->id);
    
        // Check if the product exists
        if (!$ndkloaisanpham) {
            return redirect()->route('ndkadmins.ndkloaisanpham')->with('error', 'Loại sản phẩm không tồn tại.');
        }
    
        // Update the product with validated data
        $ndkloaisanpham->ndkMaLoai = $request->ndkMaLoai;
        $ndkloaisanpham->ndkTenLoai = $request->ndkTenLoai;
        $ndkloaisanpham->ndkTrangThai = $request->ndkTrangThai;
    
        // Save the updated product
        $ndkloaisanpham->save();
    
        // Redirect back to the list page with a success message
        return redirect()->route('ndkadmins.ndkloaisanpham')->with('success', 'Cập nhật loại sản phẩm thành công.');
    }
    
    

    public function ndkGetDetail($id)
    {
        $ndkloaisanpham = ndk_LOAI_SAN_PHAM::where('id', $id)->first();
        return view('ndkAdmins.ndkloaisanpham.ndk-detail',['ndkloaisanpham'=>$ndkloaisanpham]);

    }

    public function ndkDelete($id)
    {
        ndk_LOAI_SAN_PHAM::where('id',$id)->delete();
    return back()->with('loaisanpham_deleted','Đã xóa Loại Sản Phẩm thành công!');
    }

}