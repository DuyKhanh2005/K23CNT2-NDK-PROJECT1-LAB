@extends('_layouts.frontend.user1')

@section('title', 'Hóa Đơn')

@section('content-body')
<div class="container">
    <h1>Mua Sản Phẩm: {{ $sanPham->ndkTenSanPham }}</h1>

    <form action="{{ route('hoadon.store', ['sanPham' => $sanPham->id]) }}" method="POST">
        @csrf
        <!-- Các trường khách hàng -->
        <div class="mb-3">
            <label for="ndkMaKhachHang" class="form-label">Mã Khách Hàng</label>
            <input type="text" name="ndkMaKhachHang" value="{{ Session::get('ndkMaKhachHang', '') }}" class="form-control" required readonly>
        </div>

        <div class="mb-3">
            <label for="ndkHoTenKhachHang" class="form-label">Họ Tên Khách Hàng</label>
            <input type="text" name="ndkHoTenKhachHang" value="{{ Session::get('username1', '') }}" class="form-control" required readonly>
        </div>

        <div class="mb-3">
            <label for="ndkEmail" class="form-label">Email</label>
            <input type="email" name="ndkEmail" value="{{ Session::get('ndkEmail', '') }}" class="form-control" required readonly>
        </div>

        <div class="mb-3">
            <label for="ndkDienThoai" class="form-label">Số Điện Thoại</label>
            <input type="text" name="ndkDienThoai" value="{{ Session::get('ndkDienThoai', '') }}" class="form-control" required readonly>
        </div>

        <div class="mb-3">
            <label for="ndkDiaChi" class="form-label">Địa Chỉ</label>
            <input type="text" name="ndkDiaChi" value="{{ Session::get('ndkDiaChi', '') }}" class="form-control" required>
        </div>

        <!-- Chọn sản phẩm và số lượng -->
        <input type="hidden" name="ndkSanPhamId" value="{{ $sanPham->id }}" required>
        <div class="mb-3">
            <label for="ndkSoLuong" class="form-label">Số Lượng</label>
            <input type="number" name="ndkSoLuong" value="1" min="1" max="{{ $sanPham->ndkSoLuong }}" class="form-control" required>
        </div>

        <!-- Nút Mua -->
        <button type="submit" class="btn btn-primary">Mua Sản Phẩm</button>
        
    </form>
</div>
@endsection