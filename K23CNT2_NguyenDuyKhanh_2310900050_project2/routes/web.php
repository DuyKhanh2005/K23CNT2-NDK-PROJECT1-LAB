<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ndk_LOAI_SAN_PHAMController;
use App\Http\Controllers\ndk_SAN_PHAMController;
use App\Http\Controllers\ndk_KHACH_HANGcontroller;
use App\Http\Controllers\ndk_DANH_SACH_QUAN_TRIController;
use App\Http\Controllers\ndk_HOA_DONController;
use App\Http\Controllers\ndk_CT_HOA_DONController;
use App\Http\Controllers\ndk_TIN_TUCController;
use App\Http\Controllers\ndk_LOGIN_USERController;
use App\Http\Controllers\ndk_SIGNUPController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// admins login --------------------------------------------------------------------------------------------------------------------------------------
use App\Http\Controllers\ndk_QUAN_TRIController;
Route::get('/', [ndk_QUAN_TRIController::class, 'ndkLogin'])->name('admins.ndkLogin');
Route::post('/', [ndk_QUAN_TRIController::class, 'ndkLoginSubmit'])->name('admins.ndkLoginSubmit');


#admins - route--------------------------------------------------------------------------------------------------------------------------------------
route::get('/ndk-admins',function(){
    return view('ndkAdmins.index');
});
#admins - danh muc--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/ndk-admins/ndkdanhsachquantri/ndkdanhmuc', [ndk_DANH_SACH_QUAN_TRIController::class, 'danhmuc'])->name('ndkAdmins.ndkdanhsachquantri.danhmuc');
#admins - tin tức --------------------------------------------------------------------------------------------------------------------------------------
Route::get('/ndk-admins/ndkdanhsachquantri/ndktintuc', [ndk_DANH_SACH_QUAN_TRIController::class, 'tintuc'])->name('ndkAdmins.ndkdanhsachquantri..danhmuc.tintuc');
// Sản phẩm--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/ndk-admins/ndkdanhsachquantri/ndksanpham', [ndk_DANH_SACH_QUAN_TRIController::class, 'sanpham'])->name('ndkAdmins.ndkdanhsachquantri.danhmuc.sanpham');
// Mô tả sản phẩm--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/ndk-admins/ndkdanhsachquantri/ndkmota/{id}', [ndk_DANH_SACH_QUAN_TRIController::class, 'mota'])->name('ndkAdmins.ndkdanhsachquantri.danhmuc.mota');
#admins - nguoidung--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/ndk-admins/ndkdanhsachquantri/ndknguoidung', [ndk_DANH_SACH_QUAN_TRIController::class, 'nguoidung'])->name('ndkAdmins.ndkdanhsachquantri.nguoidung');

// loai san pham--------------------------------------------------------------------------------------------------------------------------------------
// list
Route::get('/ndk-admins/ndk-loai-san-pham',[ndk_LOAI_SAN_PHAMController::class,'ndkList'])->name('ndkadmins.ndkloaisanpham');
//create
Route::get('/ndk-admins/ndk-loai-san-pham/ndk-create',[ndk_LOAI_SAN_PHAMController::class,'ndkCreate'])->name('ndkadmin.ndkloaisanpham.ndkcreate');
Route::post('/ndk-admins/ndk-loai-san-pham/ndk-create',[ndk_LOAI_SAN_PHAMController::class,'ndkCreateSunmit'])->name('ndkadmin.ndkloaisanpham.ndkCreateSunmit');
// edit
Route::get('/ndk-admins/ndk-loai-san-pham/ndk-edit/{id}',[ndk_LOAI_SAN_PHAMController::class,'ndkEdit'])->name('ndkadmin.ndkloaisanpham.ndkEdit');
Route::post('/ndk-admins/ndk-loai-san-pham/ndk-edit',[ndk_LOAI_SAN_PHAMController::class,'ndkEditSubmit'])->name('ndkadmin.ndkloaisanpham.ndkEditSubmit');
// detail
Route::get('/ndk-admins/ndk-loai-san-pham/ndk-detail/{id}',[ndk_LOAI_SAN_PHAMController::class,'ndkGetDetail'])->name('ndkadmin.ndkloaisanpham.ndkGetDetail');
// delete
Route::get('/ndk-admins/ndk-loai-san-pham/ndk-delete/{id}',[ndk_LOAI_SAN_PHAMController::class,'ndkDelete'])->name('ndkadmin.ndkloaisanpham.ndkDelete');

// san pham--------------------------------------------------------------------------------------------------------------------------------------
// search
Route::get('/ndk-admins/ndk-san-pham/search', [ndk_SAN_PHAMController::class, 'searchAdmins'])->name('ndkuser.searchAdmins');
// list

Route::get('/ndk-admins/ndk-san-pham',[ndk_SAN_PHAMController::class,'ndkList'])->name('ndkadims.ndksanpham');
//create
Route::get('/ndk-admins/ndk-san-pham/ndk-create',[ndk_SAN_PHAMController::class,'ndkCreate'])->name('ndkadmin.ndksanpham.ndkcreate');
Route::post('/ndk-admins/ndk-san-pham/ndk-create',[ndk_SAN_PHAMController::class,'ndkCreateSubmit'])->name('ndkadmin.ndksanpham.ndkCreateSubmit');
//detail
Route::get('/ndk-admins/ndk-san-pham/ndk-detail/{id}', [ndk_SAN_PHAMController::class, 'ndkDetail'])->name('ndkadmin.ndksanpham.ndkDetail');
// edit
Route::get('/ndk-admins/ndk-san-pham/ndk-edit/{id}', [ndk_SAN_PHAMController::class, 'ndkEdit'])->name('ndkadmin.ndksanpham.ndkedit');

// Xử lý cập nhật sản phẩm
Route::post('/ndk-admins/ndk-san-pham/ndk-edit/{id}', [ndk_SAN_PHAMController::class, 'ndkEditSubmit'])->name('ndkadmin.ndksanpham.ndkEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/ndk-admins/ndk-san-pham/ndk-delete/{id}', [ndk_SAN_PHAMController::class, 'ndkdelete'])->name('ndkadmin.ndksanpham.ndkdelete');


// khach hang--------------------------------------------------------------------------------------------------------------------------------------
// List
Route::get('/ndk-admins/ndk-khach-hang', [ndk_KHACH_HANGcontroller::class, 'ndkList'])->name('ndkadmins.ndkkhachhang');

// Detail
Route::get('/ndk-admins/ndk-khach-hang/ndk-detail/{id}', [ndk_KHACH_HANGcontroller::class, 'ndkDetail'])->name('ndkadmin.ndkkhachhang.ndkDetail');

// Create
Route::get('/ndk-admins/ndk-khach-hang/ndk-create', [ndk_KHACH_HANGcontroller::class, 'ndkCreate'])->name('ndkadmin.ndkkhachhang.ndkcreate');
Route::post('/ndk-admins/ndk-khach-hang/ndk-create', [ndk_KHACH_HANGcontroller::class, 'ndkCreateSubmit'])->name('ndkadmin.ndkkhachhang.ndkCreateSubmit');

// Edit
Route::get('/ndk-admins/ndk-khach-hang/ndk-edit/{id}', [ndk_KHACH_HANGcontroller::class, 'ndkEdit'])->name('ndkadmin.ndkkhachhang.ndkedit');
Route::post('/ndk-admins/ndk-khach-hang/ndk-edit/{id}', [ndk_KHACH_HANGcontroller::class, 'ndkEditSubmit'])->name('ndkadmin.ndkkhachhang.ndkEditSubmit');

// Delete (Sử dụng POST hoặc DELETE)
Route::post('/ndk-admins/ndk-khach-hang/ndk-delete/{id}', [ndk_KHACH_HANGcontroller::class, 'ndkDelete'])->name('ndkadmin.ndkkhachhang.ndkdelete');


// Hóa Đơn--------------------------------------------------------------------------------------------------------------------------------------
// list
Route::get('/ndk-admins/ndk-hoa-don',[ndk_HOA_DONController::class,'ndkList'])->name('ndkadmins.ndkhoadon');
//detail
Route::get('/ndk-admins/ndk-hoa-don/ndk-detail/{id}', [ndk_HOA_DONController::class, 'ndkDetail'])->name('ndkadmin.ndkhoadon.ndkDetail');
//create
Route::get('/ndk-admins/ndk-hoa-don/ndk-create',[ndk_HOA_DONController::class,'ndkCreate'])->name('ndkadmin.ndkhoadon.ndkcreate');
Route::post('/ndk-admins/ndk-hoa-don/ndk-create',[ndk_HOA_DONController::class,'ndkCreateSubmit'])->name('ndkadmin.ndkhoadon.ndkCreateSubmit');
//edit
Route::get('/ndk-admins/ndk-hoa-don/ndk-edit/{id}', [ndk_HOA_DONController::class, 'ndkEdit'])->name('ndkadmin.ndkhoadon.ndkedit');
Route::post('/ndk-admins/ndk-hoa-don/ndk-edit/{id}', [ndk_HOA_DONController::class, 'ndkEditSubmit'])->name('ndkadmin.ndkhoadon.ndkEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/ndk-admins/ndk-hoa-don/ndk-delete/{id}', [ndk_HOA_DONController::class, 'ndkDelete'])->name('ndkadmin.ndkhoadon.ndkdelete');


// Chi Tiết Hóa Đơn--------------------------------------------------------------------------------------------------------------------------------------
// list
Route::get('/ndk-admins/ndk-ct-hoa-don',[ndk_CT_HOA_DONController::class,'ndkList'])->name('ndkadmins.ndkcthoadon');
//detail
Route::get('/ndk-admins/ndk-ct-hoa-don/ndk-detail/{id}', [ndk_CT_HOA_DONController::class, 'ndkDetail'])->name('ndkadmin.ndkcthoadon.ndkDetail');
//create
Route::get('/ndk-admins/ndk-ct-hoa-don/ndk-create',[ndk_CT_HOA_DONController::class,'ndkCreate'])->name('ndkadmin.ndkcthoadon.ndkcreate');
Route::post('/ndk-admins/ndk-ct-hoa-don/ndk-create',[ndk_CT_HOA_DONController::class,'ndkCreateSubmit'])->name('ndkadmin.ndkcthoadon.ndkCreateSubmit');
//edit
Route::get('/ndk-admins/ndk-ct-hoa-don/ndk-edit/{id}', [ndk_CT_HOA_DONController::class, 'ndkEdit'])->name('ndkadmin.ndkcthoadon.ndkedit');
Route::post('/ndk-admins/ndk-ct-hoa-don/ndk-edit/{id}', [ndk_CT_HOA_DONController::class, 'ndkEditSubmit'])->name('ndkadmin.ndkcthoadon.ndkEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/ndk-admins/ndk-ct-hoa-don/ndk-delete/{id}', [ndk_CT_HOA_DONController::class, 'ndkDelete'])->name('ndkadmin.ndkcthoadon.ndkdelete');


// Quản trị Viên--------------------------------------------------------------------------------------------------------------------------------------
// list
Route::get('/ndk-admins/ndk-quan-tri',[ndk_QUAN_TRIController::class,'ndkList'])->name('ndkadmins.ndkquantri');
//detail
Route::get('/ndk-admins/ndk-quan-tri/ndk-detail/{id}', [ndk_QUAN_TRIController::class, 'ndkDetail'])->name('ndkadmin.ndkquantri.ndkDetail');
//create
Route::get('/ndk-admins/ndk-quan-tri/ndk-create',[ndk_QUAN_TRIController::class,'ndkCreate'])->name('ndkadmin.ndkquantri.ndkcreate');
Route::post('/ndk-admins/ndk-quan-tri/ndk-create',[ndk_QUAN_TRIController::class,'ndkCreateSubmit'])->name('ndkadmin.ndkquantri.ndkCreateSubmit');
//edit
Route::get('/ndk-admins/ndk-quan-tri/ndk-edit/{id}', [ndk_QUAN_TRIController::class, 'ndkEdit'])->name('ndkadmin.ndkquantri.ndkedit');
Route::post('/ndk-admins/ndk-quan-tri/ndk-edit/{id}', [ndk_QUAN_TRIController::class, 'ndkEditSubmit'])->name('ndkadmin.ndkquantri.ndkEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/ndk-admins/ndk-quan-tri/ndk-delete/{id}', [ndk_QUAN_TRIController::class, 'ndkDelete'])->name('ndkadmin.ndkquantri.ndkdelete');

// Tin Tức--------------------------------------------------------------------------------------------------------------------------------------
// list
Route::get('/ndk-admins/ndk-tin-tuc',[ndk_TIN_TUCController::class,'ndkList'])->name('ndkadmins.ndktintuc');
//detail
Route::get('/ndk-admins/ndk-tin-tuc/ndk-detail/{id}', [ndk_TIN_TUCController::class, 'ndkDetail'])->name('ndkadmin.ndktintuc.ndkDetail');
//create
Route::get('/ndk-admins/ndk-tin-tuc/ndk-create',[ndk_TIN_TUCController::class,'ndkCreate'])->name('ndkadmin.ndktintuc.ndkcreate');
Route::post('/ndk-admins/ndk-tin-tuc/ndk-create',[ndk_TIN_TUCController::class,'ndkCreateSubmit'])->name('ndkadmin.ndktintuc.ndkCreateSubmit');
//edit
Route::get('/ndk-admins/ndk-tin-tuc/ndk-edit/{id}', [ndk_TIN_TUCController::class, 'ndkEdit'])->name('ndkadmin.ndktintuc.ndkedit');
Route::post('/ndk-admins/ndk-tin-tuc/ndk-edit/{id}', [ndk_TIN_TUCController::class, 'ndkEditSubmit'])->name('ndkadmin.ndktintuc.ndkEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/ndk-admins/ndk-tin-tuc/ndk-delete/{id}', [ndk_TIN_TUCController::class, 'ndkDelete'])->name('ndkadmin.ndktintuc.ndkdelete');














use App\Http\Controllers\HomeController;

// User - Routes
Route::get('/ndk-user', [HomeController::class, 'index'])->name('ndkuser.home');
Route::get('/ndk-user1', [HomeController::class, 'index1'])->name('ndkuser.home1');
// Hiển thị chi tiết sản phẩm
Route::get('/ndk-user/show/{id}', [HomeController::class, 'show'])->name('ndkuser.show');
// search
Route::get('/search', [ndk_SAN_PHAMController::class, 'search'])->name('ndkuser.search');
Route::get('/search1', [ndk_SAN_PHAMController::class, 'search1'])->name('ndkuser.search1');

Route::get('/ndkuser/login', [ndk_LOGIN_USERController::class, 'ndkLogin'])->name('ndkuser.login');
Route::post('/ndkuser/login', [ndk_LOGIN_USERController::class, 'ndkLoginSubmit'])->name('ndkuser.ndkLoginSubmit');
Route::get('/ndkuser/logout', [ndk_LOGIN_USERController::class, 'ndkLogout'])->name('ndkuser.logout');


// hỗ trợ 
route::get('/ndk-user/support',function()
{
    return view('ndkuser.support');
});

// signup
Route::get('/ndk-user/signup', [ndk_SIGNUPController::class, 'ndksignup'])->name('ndkuser.ndksignup');
Route::post('/ndk-user/signup', [ndk_SIGNUPController::class, 'ndksignupSubmit'])->name('ndkuser.ndksignupSubmit');



// Route để hiển thị sản phẩm trong trang thanh toán
Route::get('/ndk-user/thanhtoan/{product_id}', [ndk_CT_HOA_DONController::class, 'ndkthanhtoan'])->name('ndkuser.ndkthanhtoan');

// Route để xử lý thanh toán
Route::post('/ndk-user/thanhtoan', [ndk_CT_HOA_DONController::class, 'storeThanhtoan'])->name('ndkuser.storeThanhtoan');
// create hóa đơn user


// tạo bảng hóa đơn
Route::get('san-pham/{sanPham}', [ndk_CT_HOA_DONController::class, 'show'])->name('sanpham.show');
Route::post('mua-san-pham/{sanPham}', [ndk_CT_HOA_DONController::class, 'store'])->name('hoadon.store');

// xem bảng Hóa Đơn mới Tạo
Route::get('hoa-don/{hoaDonId}/san-pham/{sanPhamId}', [ndk_HOA_DONController::class, 'show'])->name('hoadon.show');



// tạo bảng chi tiết hóa đơn


// Route để tạo mới chi tiết hóa đơn
Route::get('/cthoadon/{hoaDonId}/{sanPhamId}', [ndk_CT_HOA_DONController::class, 'create'])->name('cthoadon.create');

// Route để lưu chi tiết hóa đơn
Route::post('/cthoadon/store', [ndk_CT_HOA_DONController::class, 'storecthoadon'])->name('cthoadon.storecthoadon');

// Route để hiển thị chi tiết hóa đơn
Route::get('/hoa-don-id/{hoaDonId}/san-pham-id/{sanPhamId}', [ndk_CT_HOA_DONController::class, 'cthoadonshow'])->name('cthoadon.cthoadonshow');


// giỏ hàng

