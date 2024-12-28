<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ndk_CT_HOA_DON; 
use App\Models\ndk_SAN_PHAM; 
use App\Models\ndk_HOA_DON; 

class ndk_CT_HOA_DONController extends Controller
{
    //
      //admin CRUD
    // list -----------------------------------------------------------------------------------------------------------------------------------------
    public function ndkList()
    {
        $ndkcthoadons = ndk_CT_HOA_DON::all();
        return view('ndkAdmins.ndkcthoadon.ndk-list',['ndkcthoadons'=>$ndkcthoadons]);
    }
    // detail -----------------------------------------------------------------------------------------------------------------------------------------
    public function ndkDetail($id)
    {
        // Tìm sản phẩm theo ID
        $ndkcthoadon = ndk_CT_HOA_DON::where('id', $id)->first();

        // Trả về view và truyền thông tin sản phẩm
        return view('ndkAdmins.ndkcthoadon.ndk-detail', ['ndkcthoadon' => $ndkcthoadon]);
    }

     // create-----------------------------------------------------------------------------------------------------------------------------------------
     public function ndkCreate()
     {
         $ndkhoadon = ndk_HOA_DON::all();
         $ndksanpham = ndk_SAN_PHAM::all();
         return view('ndkAdmins.ndkcthoadon.ndk-create',['ndkhoadon'=>$ndkhoadon,'ndksanpham'=>$ndksanpham]);
     }
     //post-----------------------------------------------------------------------------------------------------------------------------------------
     public function ndkCreateSubmit(Request $request)
     {
         // Xác thực dữ liệu yêu cầu dựa trên các quy tắc xác thực
         $validate = $request->validate([
             'ndkHoaDonID' => 'required|exists:ndk_hoa_don,id',
             'ndkSanPhamID' => 'required|exists:ndk_san_pham,id',
             'ndkSoLuongMua' => 'required|numeric',  
             'ndkDonGiaMua' => 'required|numeric',
             'ndkThanhTien' => 'required|numeric',  
             'ndkTrangThai' => 'required|in:0,1,2',
         ]);
     
         // Tạo một bản ghi hóa đơn mới
         $ndkcthoadon = new ndk_CT_HOA_DON;
     
         // Gán dữ liệu xác thực vào các thuộc tính của mô hình
         $ndkcthoadon->ndkHoaDonID = $request->ndkHoaDonID;
         $ndkcthoadon->ndkSanPhamID = $request->ndkSanPhamID;  
         $ndkcthoadon->ndkSoLuongMua = $request->ndkSoLuongMua;
         $ndkcthoadon->ndkDonGiaMua = $request->ndkDonGiaMua;
         $ndkcthoadon->ndkThanhTien = $request->ndkThanhTien;
         $ndkcthoadon->ndkTrangThai = $request->ndkTrangThai;
     
        
     
         // Lưu bản ghi mới vào cơ sở dữ liệu
         $ndkcthoadon->save();
     
         // Chuyển hướng đến danh sách hóa đơn
         return redirect()->route('ndkadmins.ndkcthoadon');
     }

      // edit-----------------------------------------------------------------------------------------------------------------------------------------
      public function ndkEdit($id)
{
    $ndkhoadon = ndk_HOA_DON::all(); // Lấy tất cả các hóa đơn
    $ndksanpham = ndk_SAN_PHAM::all(); // Lấy tất cả các sản phẩm

    // Lấy chi tiết hóa đơn cần chỉnh sửa
    $ndkcthoadon = ndk_CT_HOA_DON::where('id', $id)->first();

    if (!$ndkcthoadon) {
        // Nếu không tìm thấy chi tiết hóa đơn, chuyển hướng với thông báo lỗi
        return redirect()->route('ndkadmins.ndkcthoadon')->with('error', 'Không tìm thấy chi tiết hóa đơn!');
    }

    // Trả về view với dữ liệu
    return view('ndkAdmins.ndkcthoadon.ndk-edit', [
        'ndkhoadon' => $ndkhoadon,
        'ndksanpham' => $ndksanpham,
        'ndkcthoadon' => $ndkcthoadon
    ]);
}

      //post-----------------------------------------------------------------------------------------------------------------------------------------
      public function ndkEditSubmit(Request $request,$id)
      {
          // Xác thực dữ liệu yêu cầu dựa trên các quy tắc xác thực
          $validate = $request->validate([
              'ndkHoaDonID' => 'required|exists:ndk_hoa_don,id',
              'ndkSanPhamID' => 'required|exists:ndk_san_pham,id',
              'ndkSoLuongMua' => 'required|numeric',  
              'ndkDonGiaMua' => 'required|numeric',
              'ndkThanhTien' => 'required|numeric',  
              'ndkTrangThai' => 'required|in:0,1,2',
          ]);
         
      
          // Tạo một bản ghi hóa đơn mới
          $ndkcthoadon = ndk_CT_HOA_DON::where('id', $id)->first();
      
          // Gán dữ liệu xác thực vào các thuộc tính của mô hình
          $ndkcthoadon->ndkHoaDonID = $request->ndkHoaDonID;
          $ndkcthoadon->ndkSanPhamID = $request->ndkSanPhamID;  
          $ndkcthoadon->ndkSoLuongMua = $request->ndkSoLuongMua;
          $ndkcthoadon->ndkDonGiaMua = $request->ndkDonGiaMua;
          $ndkcthoadon->ndkThanhTien = $request->ndkThanhTien;
          $ndkcthoadon->ndkTrangThai = $request->ndkTrangThai;
      
         
      
          // Lưu bản ghi mới vào cơ sở dữ liệu
          $ndkcthoadon->save();
      
          // Chuyển hướng đến danh sách hóa đơn
          return redirect()->route('ndkadmins.ndkcthoadon');
      }

        //delete
        public function ndkDelete($id)
        {
            ndk_CT_HOA_DON::where('id',$id)->delete();
            return back()->with('cthoadon_deleted','Đã xóa Khách hàng thành công!');
        }
     
}