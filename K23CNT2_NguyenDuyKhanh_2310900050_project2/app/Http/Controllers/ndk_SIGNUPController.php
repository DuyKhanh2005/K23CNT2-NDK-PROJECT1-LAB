<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ndk_KHACH_HANG;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ndk_SIGNUPController extends Controller
{
    // Show the form to create a new customer
    public function ndksignup()
    {
        return view('ndkuser.signup');
    }

    // Handle the form submission and store customer data
    public function ndksignupSubmit(Request $request)
    {
        // Validate the input data
        $request->validate([
            'ndkHoTenKhachHang' => 'required|string|max:255',
            'ndkEmail' => 'required|email|unique:ndk_khach_hang,ndkEmail',
            'ndkMatKhau' => 'required|min:6', // Remove the confirmed rule
            'ndkDienThoai' => 'required|numeric|unique:ndk_khach_hang,ndkDienThoai',
            'ndkDiaChi' => 'required|string|max:255',
        ]);

        // Generate a new customer ID (ndkMaKhachHang)
        $lastCustomer = ndk_KHACH_HANG::latest('ndkMaKhachHang')->first(); // Get the latest customer to determine the next ID
    
        // If no customers exist, start with KH001
        $newCustomerID = $lastCustomer
            ? 'KH' . str_pad((intval(substr($lastCustomer->ndkMaKhachHang, 2)) + 1), 3, '0', STR_PAD_LEFT)
            : 'KH001'; // First customer will be KH001

        // Create a new customer record
        $ndkkhachhang = new ndk_KHACH_HANG;
        $ndkkhachhang->ndkMaKhachHang = $newCustomerID; // Automatically generated ID
        $ndkkhachhang->ndkHoTenKhachHang = $request->ndkHoTenKhachHang;
        $ndkkhachhang->ndkEmail = $request->ndkEmail;
        $ndkkhachhang->ndkMatKhau = Hash::make($request->ndkMatKhau); // Encrypt the password
        $ndkkhachhang->ndkDienThoai = $request->ndkDienThoai;
        $ndkkhachhang->ndkDiaChi = $request->ndkDiaChi;
        $ndkkhachhang->ndkNgayDangKy = now(); // Set the current timestamp for registration date
        $ndkkhachhang->ndkTrangThai = 0; // Set the default value for ndkTrangThai to 0 (inactive or unverified)

        // Save the new customer data
        try {
            $ndkkhachhang->save();
            // Redirect to login page on success with a success message
            return redirect()->route('ndkuser.login')->with('success', 'Đăng ký thành công, vui lòng đăng nhập!');
        } catch (\Exception $e) {
            // In case of error, return to the previous page with an error message
            return back()->with('error', 'Có lỗi xảy ra, vui lòng thử lại! Lỗi: ' . $e->getMessage());
        }
    }
}
