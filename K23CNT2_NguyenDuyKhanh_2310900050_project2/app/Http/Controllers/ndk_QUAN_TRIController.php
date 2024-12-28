<?php

namespace App\Http\Controllers;

use App\Models\ndk_QUAN_TRI; // Thêm dòng này để sử dụng Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; // Thêm dòng này để sử dụng session

class ndk_QUAN_TRIController extends Controller
{
    // GET login (authentication)
    public function ndkLogin()
    {
        return view('ndkAdmins.ndk-login');
    }

    // POST login (authentication)
    public function ndkLoginSubmit(Request $request)
    {
        // Validate tài khoản và mật khẩu
        $request->validate([
            'ndkTaiKhoan' => 'required|string',
            'ndkMatKhau' => 'required|string',
        ]);

        // Tìm người dùng trong bảng ndk_QUAN_TRI
        $user = ndk_QUAN_TRI::where('ndkTaiKhoan', $request->ndkTaiKhoan)->first();

        // Kiểm tra nếu người dùng tồn tại và mật khẩu đúng
        if ($user && Hash::check($request->ndkMatKhau, $user->ndkMatKhau)) {
            // Đăng nhập thành công
            Auth::loginUsingId($user->id);

            // Lưu tên tài khoản vào session
            Session::put('username', $user->ndkTaiKhoan);

            // Chuyển hướng về trang admin với thông báo thành công
            return redirect('/ndk-admins')->with('message', 'Đăng Nhập Thành Công');
        } else {
            // Thông báo lỗi nếu tài khoản hoặc mật khẩu sai
            return redirect()->back()->withErrors(['ndkMatKhau' => 'Tài khoản hoặc mật khẩu không đúng']);
        }
    }

    public function ndklist()
{
    $ndkquantris = ndk_QUAN_TRI::all(); // Lấy tất cả quản trị viên
    return view('ndkAdmins.ndkquantri.ndk-list', ['ndkquantris'=>$ndkquantris]);
}

public function ndkDetail($id)
    {
        $ndkquantri = ndk_QUAN_TRI::where('id', $id)->first();
        return view('ndkAdmins.ndkquantri.ndk-detail',['ndkquantri'=>$ndkquantri]);

    }

    //create
    // GET: Hiển thị form thêm mới quản trị viên
public function ndkCreate()
{
    return view('ndkAdmins.ndkquantri.ndk-create');
}

// POST: Xử lý form thêm mới quản trị viên
public function ndkCreateSubmit(Request $request)
{
    // Xác thực dữ liệu
    $request->validate([
        'ndkTaiKhoan' => 'required|string|unique:ndk_quan_tri,ndkTaiKhoan',
        'ndkMatKhau' => 'required|string|min:6',
        'ndkTrangThai' => 'required|in:0,1', 
    ]);

    // Tạo bản ghi mới trong cơ sở dữ liệu
    $ndkquantri = new ndk_QUAN_TRI();
    $ndkquantri->ndkTaiKhoan = $request->ndkTaiKhoan;
    $ndkquantri->ndkMatKhau = Hash::make($request->ndkMatKhau); // Mã hóa mật khẩu
    $ndkquantri->ndkTrangThai = $request->ndkTrangThai;
    $ndkquantri->save();

    // Chuyển hướng về trang danh sách với thông báo thành công
    return redirect()->route('ndkadmins.ndkquantri')->with('success', 'Thêm quản trị viên thành công');
}

// edit
// GET: Hiển thị form chỉnh sửa quản trị viên
public function ndkEdit($id)
{
    $ndkquantri = ndk_QUAN_TRI::find($id); // Lấy thông tin quản trị viên cần chỉnh sửa
    if (!$ndkquantri) {
        return redirect()->route('ndkadmins.ndkquantri')->with('error', 'Không tìm thấy quản trị viên!');
    }
    return view('ndkAdmins.ndkquantri.ndk-edit', ['ndkquantri'=>$ndkquantri]);
}

// POST: Xử lý form chỉnh sửa quản trị viên
public function ndkEditSubmit(Request $request, $id)
{
    // Xác thực dữ liệu
    $request->validate([
        'ndkTaiKhoan' => 'required|string|unique:ndk_quan_tri,ndkTaiKhoan,' . $id,
        'ndkMatKhau' => 'nullable|string|min:6', // Cho phép mật khẩu trống
        'ndkTrangThai' => 'required|in:0,1',
    ]);

    // Lấy quản trị viên cần sửa
    $ndkquantri = ndk_QUAN_TRI::find($id);
    if (!$ndkquantri) {
        return redirect()->route('ndkadmins.ndkquantri')->with('error', 'Không tìm thấy quản trị viên!');
    }

    // Cập nhật thông tin
    $ndkquantri->ndkTaiKhoan = $request->ndkTaiKhoan;
    if ($request->ndkMatKhau) {
        $ndkquantri->ndkMatKhau = Hash::make($request->ndkMatKhau); // Cập nhật mật khẩu nếu có
    }
    $ndkquantri->ndkTrangThai = $request->ndkTrangThai;
    $ndkquantri->save();

    return redirect()->route('ndkadmins.ndkquantri')->with('success', 'Cập nhật quản trị viên thành công');
}

// delete
public function ndkDelete($id)
{
    $ndkquantri = ndk_QUAN_TRI::find($id); // Tìm quản trị viên cần xóa
    if (!$ndkquantri) {
        return redirect()->route('ndkadmins.ndkquantri')->with('error', 'Không tìm thấy quản trị viên!');
    }
    $ndkquantri->delete(); // Xóa bản ghi

    return redirect()->route('ndkadmins.ndkquantri')->with('success', 'Xóa quản trị viên thành công');
}



}