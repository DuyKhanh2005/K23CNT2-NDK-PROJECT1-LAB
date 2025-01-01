<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ndk_TIN_TUC;  // Assuming you have the model for TIN_TUC
use Illuminate\Support\Facades\Storage;

class ndk_TIN_TUCController extends Controller
{
    // List all news ----------------------------------------------------------------------
 // List all news with pagination
public function ndkList()
{
    $ndktinTucs = ndk_TIN_TUC::all();
        
    // Phân trang kết quả, thay 10 bằng số lượng bạn muốn mỗi trang
    $ndktinTucs = ndk_TIN_TUC::paginate(10);
    
    
    // Return the view with the paginated data
    return view('ndkAdmins.ndktintuc.ndk-list', ['ndktinTucs' => $ndktinTucs]);
}

    

    // Show the detail of a specific news item -------------------------------------------
    public function ndkDetail($id)
    {
        $ndktinTuc = ndk_TIN_TUC::findOrFail($id);
        return view('ndkAdmins.ndktintuc.ndk-detail', ['ndktinTuc' => $ndktinTuc]);
    }

    // Show the create form for a new news item ----------------------------------------
    public function ndkCreate()
    {
        return view('ndkAdmins.ndktintuc.ndk-create');
    }

    // Handle the form submission for creating a new news item ---------------------------
    public function ndkCreateSubmit(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'ndkMaTT' => 'required|unique:ndk_TIN_TUC,ndkMaTT',
            'ndkTieuDe' => 'required|string|max:255',
            'ndkMoTa' => 'required|string',
            'ndkNoiDung' => 'required|string',
            'ndkNgayDangTin' => 'required|date',
            'ndkNgayCapNhap' => 'required|date',
            'ndkHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Optional image
            'ndkTrangThai' => 'required|in:0,1',  // 0 - inactive, 1 - active
        ]);

        // Create the new news item
        $ndktinTuc = new ndk_TIN_TUC();
        $ndktinTuc->ndkMaTT = $request->ndkMaTT;
        $ndktinTuc->ndkTieuDe = $request->ndkTieuDe;
        $ndktinTuc->ndkMoTa = $request->ndkMoTa;
        $ndktinTuc->ndkNoiDung = $request->ndkNoiDung;
        $ndktinTuc->ndkNgayDangTin = $request->ndkNgayDangTin;
        $ndktinTuc->ndkNgayCapNhap = $request->ndkNgayCapNhap;

        // Check if there's an image and save it
        if ($request->hasFile('ndkHinhAnh')) {
            $imagePath = $request->file('ndkHinhAnh')->store('public/img/tin_tuc');
            $ndktinTuc->ndkHinhAnh = 'img/tin_tuc/' . basename($imagePath);
        }

        $ndktinTuc->ndkTrangThai = $request->ndkTrangThai;
        $ndktinTuc->save();

        return redirect()->route('ndkadmins.ndktintuc')->with('success', 'Tin tức đã được tạo thành công.');
    }

    // Delete a news item ----------------------------------------------------------------
    public function ndkDelete($id)
    {
        $ndktinTuc = ndk_TIN_TUC::findOrFail($id);
        $ndktinTuc->delete();

        return back()->with('success', 'Tin tức đã được xóa thành công.');
    }

    // Show the edit form for a specific news item --------------------------------------
    public function ndkEdit($id)
    {
        $ndktinTuc = ndk_TIN_TUC::findOrFail($id);
        return view('ndkAdmins.ndktintuc.ndk-edit', ['ndktinTuc' => $ndktinTuc]);
    }

    // Handle the form submission for updating an existing news item ---------------------
    public function ndkEditSubmit(Request $request, $id)
{
    $validated = $request->validate([
        'ndkTieuDe' => 'required|string|max:255',
        'ndkMoTa' => 'required|string|max:500',
        'ndkNoiDung' => 'required|string',
        'ndkHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'ndkNgayDangTin' => 'required|date',
        'ndkNgayCapNhap' => 'nullable|date',
        'ndkTrangThai' => 'required|in:0,1',
    ]);

    // Retrieve the news article to update
    $ndktinTuc = ndk_TIN_TUC::findOrFail($id);

    // Handle image upload
    if ($request->hasFile('ndkHinhAnh')) {
        // Delete old image if exists
        if ($ndktinTuc->ndkHinhAnh) {
            Storage::delete('public/' . $ndktinTuc->ndkHinhAnh);
        }

        $imagePath = $request->file('ndkHinhAnh')->store('ndktinTuc', 'public');
        $ndktinTuc->ndkHinhAnh = $imagePath;
    }

    // Update the news article
    $ndktinTuc->ndkTieuDe = $request->ndkTieuDe;
    $ndktinTuc->ndkMoTa = $request->ndkMoTa;
    $ndktinTuc->ndkNoiDung = $request->ndkNoiDung;
    $ndktinTuc->ndkNgayDangTin = $request->ndkNgayDangTin;
    $ndktinTuc->ndkNgayCapNhap = $request->ndkNgayCapNhap ?? now();
    $ndktinTuc->ndkTrangThai = $request->ndkTrangThai;
    $ndktinTuc->save();

    return redirect()->route('ndkadmins.ndktintuc')->with('success', 'Tin tức đã được cập nhật!');
}

}