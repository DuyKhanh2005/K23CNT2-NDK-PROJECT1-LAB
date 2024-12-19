<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NdkSessionController extends Controller
{
    // Đọc dữ liệu từ session
    public function ndkgetSessionData(Request $request)
{
    if ($request->session()->has('K23CNT2_NguyenDuyKhanh')) {
        $data = $request->session()->get('K23CNT2_NguyenDuyKhanh');
        echo "<h2>Session Data: $data</h2>";
    } else {
        echo "<h2>Không có dữ liệu trong session</h2>";
    }
}


    // Lưu dữ liệu vào session
    public function ndkStoreSessionData(Request $request)
    {
        $request->session()->put('');
        echo "<h2>Dữ liệu đã được lưu trong session</h2>";
    }

    // Xóa dữ liệu khỏi session
    public function ndkDeleteSessionData(Request $request)
    {
        if ($request->session()->has('K23CNT2_NguyenDuyKhanh')) {
            $request->session()->forget('K23CNT2_NguyenDuyKhanh');
            echo "<h2>Dữ liệu đã được xóa khỏi session</h2>";
        } else {
            echo "<h2>Không có dữ liệu để xóa</h2>";
        }
    }
}
