<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ndk_KHACH_HANG;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ndk_LOGIN_USERController extends Controller
{
    // Show login form
    public function ndkLogin()
    {
        return view('ndkuser.login');
    }

    // Handle login form submission
    public function ndkLoginSubmit(Request $request)
{
    // Validate the input data
    $request->validate([
        'ndkEmail' => 'required|email',
        'ndkMatKhau' => 'required|string',
    ]);

    // Tìm người dùng theo email
    $user = ndk_KHACH_HANG::where('ndkEmail', $request->ndkEmail)->first();

    // Kiểm tra nếu người dùng tồn tại và mật khẩu đúng
    if ($user && Hash::check($request->ndkMatKhau, $user->ndkMatKhau)) {
        // Đăng nhập người dùng
        Auth::login($user);

        // Lưu thông tin người dùng vào session
        Session::put('username1', $user->ndkHoTenKhachHang);  // Lưu tên người dùng
        Session::put('ndkEmail', $user->ndkEmail);  // Lưu email
        Session::put('ndkDienThoai', $user->ndkDienThoai);  // Lưu số điện thoại
        Session::put('ndkDiaChi', $user->ndkDiaChi);  // Lưu địa chỉ
        Session::put('ndkMaKhachHang', $user->ndkMaKhachHang);  // Lưu mã khách hàng

        // Lưu trữ các thông tin cần thiết vào session

        // Chuyển hướng người dùng tới trang chủ sau khi đăng nhập thành công
        return redirect()->route('ndkuser.home1')->with('message', 'Đăng Nhập Thành Công');
    } else {
        // Nếu thông tin không chính xác, trả về lỗi
        return redirect()->back()->withErrors(['ndkEmail' => 'Email hoặc Mật khẩu không đúng']);
    }
}

    
    

}