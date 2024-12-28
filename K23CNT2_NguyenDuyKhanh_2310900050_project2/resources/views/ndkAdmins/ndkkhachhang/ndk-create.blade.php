@extends('_layouts.admins._master')
@section('title','Create Khách Hàng')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('ndkadmin.ndkkhachhang.ndkCreateSubmit')}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới Khách Hàng</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="ndkMaKhachHang" class="form-label">Mã Khách Hàng</label>
                                <input type="text" class="form-control" id="ndkMaKhachHang" name="ndkMaKhachHang" value="{{ old('ndkMaKhachHang') }}" >
                                @error('ndkMaKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkHoTenKhachHang" class="form-label">Họ Tên Khách Hàng</label>
                                <input type="text" class="form-control" id="ndkHoTenKhachHang" name="ndkHoTenKhachHang" value="{{ old('ndkHoTenKhachHang') }}" >
                                @error('ndkHoTenKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="ndkEmail" name="ndkEmail" value="{{ old('ndkEmail') }}" >
                                @error('ndkEmail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkMatKhau" class="form-label">Mật Khẩu</label>
                                <input type="password" class="form-control" id="ndkMatKhau" name="ndkMatKhau" value="{{ old('ndkMatKhau') }}" >
                                @error('ndkMatKhau')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkDienThoai" class="form-label">Điện Thoại</label>
                                <input type="tel" class="form-control" id="ndkDienThoai" name="ndkDienThoai" value="{{ old('ndkDienThoai') }}" >
                                @error('ndkDienThoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkDiaChi" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control" id="ndkDiaChi" name="ndkDiaChi" value="{{ old('ndkDiaChi') }}" >
                                @error('ndkDiaChi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkNgayDangKy" class="form-label">Ngày Đăng Ký</label>
                                <input type="date" class="form-control" id="ndkNgayDangKy" name="ndkNgayDangKy" value="{{ old('ndkNgayDangKy') }}" >
                                @error('ndkNgayDangKy')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="ndkTrangThai0" name="ndkTrangThai" value="0" checked/>
                                    <label for="ndkTrangThai1"> Hoạt Động</label>
                                    &nbsp;
                                    <input type="radio" id="ndkTrangThai1" name="ndkTrangThai" value="1"/>
                                    <label for="ndkTrangThai0">Tạm Khóa</label>
                                    &nbsp;
                                    <input type="radio" id="ndkTrangThai2" name="ndkTrangThai" value="2"/>
                                    <label for="ndkTrangThai0">Khóa</label>
                                </div>
                                @error('ndkTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Create</button>
                            <a href="{{route('ndkadmins.ndkkhachhang')}}" class="btn btn-primary"> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection