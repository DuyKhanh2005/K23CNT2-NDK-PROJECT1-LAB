@extends('_layouts.admins._master')

@section('title', 'Chỉnh Sửa Sản Phẩm')

@section('content-body')
<div class="container border mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Chỉnh Sửa Sản Phẩm</h1>
                </div>
                <div class="card-body">
                    <!-- Form chỉnh sửa sản phẩm -->
                    <form action="{{ route('ndkadmin.ndksanpham.ndkEditSubmit', $ndksanpham->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <!-- Mã sản phẩm -->
                        <div class="mb-3">
                            <label for="ndkMaSanPham" class="form-label">Mã sản phẩm</label>
                            <input type="text" name="ndkMaSanPham" class="form-control" value="{{ old('ndkMaSanPham', $ndksanpham->ndkMaSanPham) }}">
                            @error('ndkMaSanPham')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tên sản phẩm -->
                        <div class="mb-3">
                            <label for="ndkTenSanPham" class="form-label">Tên sản phẩm</label>
                            <input type="text" name="ndkTenSanPham" class="form-control" value="{{ old('ndkTenSanPham', $ndksanpham->ndkTenSanPham) }}">
                            @error('ndkTenSanPham')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Hình ảnh sản phẩm -->
                        <div class="mb-3">
                            <label for="ndkHinhAnh" class="form-label">Hình ảnh</label>
                            <input type="file" name="ndkHinhAnh" class="form-control">
                            @if($ndksanpham->ndkHinhAnh)
                                <img src="{{ asset('storage/' . $ndksanpham->ndkHinhAnh) }}" alt="Sản phẩm {{ $ndksanpham->ndkMaSanPham }}" width="200" class="mt-2">
                            @endif
                            @error('ndkHinhAnh')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Số lượng -->
                        <div class="mb-3">
                            <label for="ndkSoLuong" class="form-label">Số lượng</label>
                            <input type="number" name="ndkSoLuong" class="form-control" value="{{ old('ndkSoLuong', $ndksanpham->ndkSoLuong) }}">
                            @error('ndkSoLuong')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Đơn giá -->
                        <div class="mb-3">
                            <label for="ndkDonGia" class="form-label">Đơn giá</label>
                            <input type="number" name="ndkDonGia" class="form-control" value="{{ old('ndkDonGia', $ndksanpham->ndkDonGia) }}">
                            @error('ndkDonGia')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Mã Loại -->
                        <div class="mb-3">
                            <label for="ndkMaLoai" class="form-label">Loại Danh Muc</label>
                            <select name="ndkMaLoai" id="ndkMaLoai" class="form-control">
                                @foreach ($ndkloaisanpham as $item)
                                    <option value="{{ $item->id }}" 
                                        {{ old('ndkMaLoai', $ndksanpham->ndkMaLoai) == $item->id ? 'selected' : '' }}>
                                        {{ $item->ndkTenLoai }}
                                    </option>
                                @endforeach
                            </select>
                            @error('ndkMaLoai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <!-- Trạng thái -->
                        <div class="mb-3">
                            <label for="ndkTrangThai" class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="ndkTrangThai1" name="ndkTrangThai" value="1" {{ old('ndkTrangThai', $ndksanpham->ndkTrangThai) == 1 ? 'checked' : '' }} />
                                <label for="ndkTrangThai1">Khóa</label>
                                &nbsp;
                                <input type="radio" id="ndkTrangThai0" name="ndkTrangThai" value="0" {{ old('ndkTrangThai', $ndksanpham->ndkTrangThai) == 0 ? 'checked' : '' }} />
                                <label for="ndkTrangThai0">Hiển Thị</label>
                            </div>
                            @error('ndkTrangThai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Nút lưu -->
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </form>
                </div>
                <div class="card-footer">
                    <!-- Nút quay lại danh sách sản phẩm -->
                    <a href="{{ route('ndkadims.ndksanpham') }}" class="btn btn-secondary">Quay lại danh sách</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection