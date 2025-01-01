<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ndk_CT_HOA_DON; 
use App\Models\ndk_SAN_PHAM; 
use App\Models\ndk_HOA_DON; 
use App\Models\ndk_KHACH_HANG; 
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ndk_CT_HOA_DONController extends Controller
{
   //create hoadon user

  // Controller
public function show($sanPhamId)
{
    $sanPham = ndk_SAN_PHAM::find($sanPhamId);

    // Lấy Mã Khách Hàng từ session
    $userId = Session::get('ndkMaKhachHang');

    // Kiểm tra khách hàng tồn tại trong hệ thống
    $khachHang = ndk_KHACH_HANG::find($userId);

    // Truyền thông tin qua view
    return view('ndkuser.hoadon', [
        'sanPham' => $sanPham,
        'khachHang' => $khachHang, // Truyền thông tin khách hàng vào view
    ]);
}
  

  
  


   /**
    * Xử lý khi người dùng nhấn "Mua", tạo hóa đơn tự động.
    */
    public function store(Request $request)
    {
        // Lấy Mã Khách Hàng từ session
        $userId = Session::get('ndkMaKhachHang'); // Lấy ID khách hàng từ session
    
        // Kiểm tra nếu không có khách hàng trong session
        if (!$userId) {
            return redirect()->route('ndkuser.login')->with('error', 'Vui lòng đăng nhập để tiếp tục!');
        }
    
        // Kiểm tra khách hàng tồn tại trong bảng ndk_KHACH_HANG
        $khachhang = ndk_KHACH_HANG::find($userId);
        if (!$khachhang) {
            return redirect()->route('ndkuser.login')->with('error', 'Khách hàng không tồn tại.');
        }
    
        // Lấy thông tin sản phẩm từ bảng ndk_SAN_PHAM
        $sanPham = ndk_SAN_PHAM::find($request->ndkSanPhamId);
        if (!$sanPham) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
        }
    
        // Tạo mã hóa đơn tự động (ndkMaHoaDon)
        $ndkMaHoaDon = 'HD' . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT); // Tạo mã hóa đơn ngẫu nhiên
    
        // Tạo hóa đơn mới với thông tin lấy từ khách hàng
        $hoaDon = ndk_HOA_DON::create([
            'ndkMaHoaDon' => $ndkMaHoaDon,
            'ndkMaKhachHang' => $khachhang->id,  // Sử dụng ID của khách hàng từ bảng ndk_KHACH_HANG
            'ndkNgayHoaDon' => Carbon::now()->toDateString(),
            'ndkNgayNhan' => Carbon::now()->addDays(3)->toDateString(),
            'ndkHoTenKhachHang' => $request->ndkHoTenKhachHang,
            'ndkEmail' => $request->ndkEmail,
            'ndkDienThoai' => $request->ndkDienThoai,
            'ndkDiaChi' => $request->ndkDiaChi,
            'ndkTongGiaTri' => $sanPham->ndkDonGia * $request->ndkSoLuong, // Tính tổng giá trị
            'ndkTrangThai' => 0, // 0 nghĩa là chưa thanh toán
        ]);
     
        // Quay lại trang chi tiết hóa đơn vừa tạo
        return redirect()->route('hoadon.show', ['hoaDonId' => $hoaDon->id, 'sanPhamId' => $sanPham->id]);
    }
    
    
    

// xem cthoadon
public function create($hoaDonId, $sanPhamId)
{
    // Lấy thông tin hóa đơn và sản phẩm
    $hoaDon = ndk_HOA_DON::find($hoaDonId);
    $sanPham = ndk_SAN_PHAM::find($sanPhamId);

    // Kiểm tra nếu hóa đơn hoặc sản phẩm không tồn tại
    if (!$hoaDon || !$sanPham) {
        return redirect()->route('hoadon.index')->with('error', 'Hóa đơn hoặc sản phẩm không tồn tại.');
    }
 // Lấy số lượng từ request
 $soLuong = request('ndkSoLuong', 1); // Số lượng mặc định là 1 nếu không có giá trị
    // Truyền dữ liệu vào view
    return view('ndkuser.cthoadon', [
        'hoaDon' => $hoaDon,
        'sanPham' => $sanPham,
        'soLuong' => $soLuong // Truyền số lượng vào view
    ]);
}


public function cthoadonshow($hoaDonId, $sanPhamId)
{
    // Lấy hóa đơn từ ID
    $hoaDon = ndk_HOA_DON::findOrFail($hoaDonId);

    // Lấy chi tiết hóa đơn từ ID
    $chiTietHoaDon = ndk_CT_HOA_DON::where('ndkHoaDonID', $hoaDonId)
                                    ->where('ndkSanPhamID', $sanPhamId)
                                    ->firstOrFail();

    // Trả về view và truyền dữ liệu
    return view('ndkuser.cthoadonshow', compact('hoaDon', 'chiTietHoaDon'));
}





    public function storecthoadon(Request $request)
    {
        // Validate các dữ liệu yêu cầu
        $validated = $request->validate([
            'ndkSanPhamID' => 'required|exists:ndk_SAN_PHAM,id',
            'ndkHoaDonID' => 'required|exists:ndk_HOA_DON,id',
            'ndkSoLuong' => 'required|integer|min:1',
        ]);
    
        // Lấy thông tin sản phẩm và hóa đơn
        $sanPham = ndk_SAN_PHAM::find($request->ndkSanPhamID);
        $hoaDon = ndk_HOA_DON::find($request->ndkHoaDonID);
    
        // Kiểm tra xem sản phẩm và hóa đơn có tồn tại không
        if (!$sanPham || !$hoaDon) {
            return redirect()->back()->with('error', 'Sản phẩm hoặc hóa đơn không tồn tại.');
        }
    
        // Kiểm tra xem chi tiết hóa đơn đã tồn tại chưa
        $chiTietHoaDon = ndk_CT_HOA_DON::where('ndkHoaDonID', $hoaDon->id)
                                        ->where('ndkSanPhamID', $sanPham->id)
                                        ->first();
    
        // Nếu chi tiết hóa đơn đã tồn tại, cập nhật số lượng và tính lại thành tiền
        if ($chiTietHoaDon) {
            // Cập nhật số lượng và tính lại tổng thành tiền
            $chiTietHoaDon->ndkSoLuongMua += $request->ndkSoLuong;  // Tăng số lượng
            $chiTietHoaDon->ndkThanhTien = $chiTietHoaDon->ndkSoLuongMua * $sanPham->ndkDonGia; // Tính lại thành tiền
            $chiTietHoaDon->save(); // Lưu cập nhật
        } else {
            // Nếu không tồn tại chi tiết hóa đơn, tạo mới chi tiết hóa đơn
            $ndkThanhTien = $request->ndkSoLuong * $sanPham->ndkDonGia;
    
            ndk_CT_HOA_DON::create([
                'ndkHoaDonID' => $hoaDon->id, // ID hóa đơn
                'ndkSanPhamID' => $sanPham->id, // ID sản phẩm
                'ndkSoLuongMua' => $request->ndkSoLuong, // Số lượng mua
                'ndkDonGiaMua' => $sanPham->ndkDonGia, // Đơn giá của sản phẩm
                'ndkThanhTien' => $ndkThanhTien, // Tổng thành tiền
                'ndkTrangThai' => 1,  // Trạng thái đơn hàng đã xác nhận
            ]);
        }
    
        // Quay lại trang chi tiết hóa đơn vừa tạo
        return redirect()->route('cthoadon.cthoadonshow', ['hoaDonId' => $hoaDon->id, 'sanPhamId' => $sanPham->id]);
    }
    


    
    
    

    
  // thanh toán
 // Hiển thị sản phẩm khi nhấn vào "Mua"
 public function ndkthanhtoan($product_id)
 {
     // Lấy sản phẩm theo ID sử dụng model
     $sanPham = ndk_SAN_PHAM::find($product_id);

     // Kiểm tra nếu không có sản phẩm
     if (!$sanPham) {
         abort(404, 'Sản phẩm không tồn tại');
     }

     // Trả về view với thông tin sản phẩm
     return view('ndkuser.thanhtoan', compact('sanPham'));
 }

 // Lưu thông tin thanh toán (chỉ cần lưu vào bảng thanh toán nếu cần, ở đây ta không tạo bảng ThanhToan)
 public function storeThanhtoan(Request $request)
 {
     // Lấy thông tin sản phẩm từ model SanPham
     $sanPham = ndk_SAN_PHAM::find($request->product_id);

     // Kiểm tra nếu không có sản phẩm
     if (!$sanPham) {
         return redirect()->route('home')->with('error', 'Sản phẩm không tồn tại');
     }

     // Tính tổng tiền thanh toán
     $tongTien = $request->ndkSoLuong * $sanPham->ndkDonGia;

     // Nếu muốn lưu vào bảng thanh toán, bạn có thể thêm logic ở đây.
     // Nhưng ở đây chỉ cần hiển thị thông tin và tính tổng tiền.

     return view('ndkuser.thanhtoan', [
         'sanPham' => $sanPham,
         'ndkSoLuong' => $request->ndkSoLuong,
         'tongTien' => $tongTien
     ]);
 }

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