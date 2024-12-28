@extends('_layouts.admins._master')
@section('title','Sửa Loại Khách Hàng')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <!-- Update the form action route to pass the ndkMaKhachHang as a parameter -->
                <form action="{{ route('ndkadmin.ndkkhachhang.ndkEditSubmit', ['id' => $ndkkhachhang->id]) }}" method="POST">
                    @csrf
                    <!-- Hidden input for the ID -->
                    <input type="hidden" name="id" value="{{ $ndkkhachhang->id }}">

                    <div class="card">
                        <div class="card-header">
                            <h1>Sửa loại Khách Hàng</h1>
                        </div>
                        <div class="card-body">
                            <!-- Mã Loại (disabled) -->
                            <div class="mb-3">
                                <label for="ndkMaKhachHang" class="form-label">Mã Khách Hàng</label>
                                <input type="text" class="form-control" id="ndkMaKhachHang" name="ndkMaKhachHang" value="{{ $ndkkhachhang->ndkMaKhachHang }}" >
                                @error('ndkMaKhachHang')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            <!-- Tên Loại -->
                            <div class="mb-3">
                                <label for="ndkHoTenKhachHang" class="form-label">Họ Tên Khách Hàng</label>
                                <input type="text" class="form-control" id="ndkHoTenKhachHang" name="ndkHoTenKhachHang" value="{{ old('ndkHoTenKhachHang', $ndkkhachhang->ndkHoTenKhachHang) }}" >
                                @error('ndkHoTenKhachHang')
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="ndkEmail" name="ndkEmail" value="{{ old('ndkEmail', $ndkkhachhang->ndkEmail) }}" >
                                @error('ndkEmail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkMatKhau" class="form-label">Mật Khẩu</label>
                                <input type="password" class="form-control" id="ndkMatKhau" name="ndkMatKhau" value="{{ old('ndkMatKhau', $ndkkhachhang->ndkMatKhau) }}" >
                                @error('ndkMatKhau')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkDienThoai" class="form-label">Điện Thoại</label>
                                <input type="tel" class="form-control" id="ndkDienThoai" name="ndkDienThoai" value="{{ old('ndkDienThoai', $ndkkhachhang->ndkDienThoai) }}" >
                                @error('ndkDienThoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkDiaChi" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control" id="ndkDiaChi" name="ndkDiaChi" value="{{ old('ndkDiaChi', $ndkkhachhang->ndkDiaChi) }}" >
                                @error('ndkDiaChi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkNgayDangKy" class="form-label">Ngày Đăng Ký</label>
                                <input type="date" class="form-control" id="ndkNgayDangKy" name="ndkNgayDangKy" value="{{ old('ndkNgayDangKy', $ndkkhachhang->ndkNgayDangKy) }}" >
                                @error('ndkNgayDangKy')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Trạng Thái -->
                            <div class="mb-3">
                                <label for="ndkTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="ndkTrangThai0" name="ndkTrangThai" value="0" {{ old('ndkTrangThai', $ndkkhachhang->ndkTrangThai) == 0 ? 'checked' : '' }} />
                                    <label for="ndkTrangThai0">Hoạt Động</label>
                                    &nbsp;
                                    <input type="radio" id="ndkTrangThai1" name="ndkTrangThai" value="1" {{ old('ndkTrangThai', $ndkkhachhang->ndkTrangThai) == 1 ? 'checked' : '' }} />
                                    <label for="ndkTrangThai1">Tạm Khóa</label>
                           
                                    &nbsp;
                                    <input type="radio" id="ndkTrangThai2" name="ndkTrangThai" value="2" {{ old('ndkTrangThai', $ndkkhachhang->ndkTrangThai) == 2 ? 'checked' : '' }} />
                                    <label for="ndkTrangThai0">Khóa</label>
                                </div>
                                @error('ndkTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="card-footer">
                            <!-- Change button label to "Cập nhật" (Update) -->
                            <button class="btn btn-success" type="submit">Cập nhật</button>
                            <a href="{{ route('ndkadmins.ndkkhachhang') }}" class="btn btn-primary">Trở lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection