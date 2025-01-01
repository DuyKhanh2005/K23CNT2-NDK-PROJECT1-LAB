@extends('_layouts.admins._master')

@section('title', 'Create Tin Tức')

@section('content-body')
<div class="container border">
    <div class="row">
        <div class="col">
            <form action="{{ route('ndkadmin.ndktintuc.ndkCreateSubmit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h1>Thêm Mới Tin Tức</h1>
                    </div>
                    <div class="card-body">
                        <!-- Mã Tin Tức -->
                        <div class="mb-3">
                            <label for="ndkMaTT" class="form-label">Mã Tin Tức</label>
                            <input type="text" class="form-control" id="ndkMaTT" name="ndkMaTT" value="{{ old('ndkMaTT') }}">
                            @error('ndkMaTT')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Tiêu đề tin tức -->
                        <div class="mb-3">
                            <label for="ndkTieuDe" class="form-label">Tiêu đề tin tức</label>
                            <input type="text" class="form-control" id="ndkTieuDe" name="ndkTieuDe" value="{{ old('ndkTieuDe') }}">
                            @error('ndkTieuDe')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Mô tả tin tức -->
                        <div class="mb-3">
                            <label for="ndkMoTa" class="form-label">Mô tả tin tức</label>
                            <input type="text" class="form-control" id="ndkMoTa" name="ndkMoTa" value="{{ old('ndkMoTa') }}">
                            @error('ndkMoTa')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Nội dung tin tức -->
                        <div class="mb-3">
                            <label for="ndkNoiDung" class="form-label">Nội dung tin tức</label>
                            <textarea class="form-control" id="ndkNoiDung" name="ndkNoiDung" rows="5">{{ old('ndkNoiDung') }}</textarea>
                            @error('ndkNoiDung')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Hình ảnh tin tức -->
                        <div class="mb-3">
                            <label for="ndkHinhAnh" class="form-label">Hình Ảnh</label>
                            <input type="file" class="form-control" id="ndkHinhAnh" name="ndkHinhAnh" accept="image/*">
                            @error('ndkHinhAnh')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Ngày đăng tin -->
                        <div class="mb-3">
                            <label for="ndkNgayDangTin" class="form-label">Ngày Đăng</label>
                            <input type="datetime-local" class="form-control" id="ndkNgayDangTin" name="ndkNgayDangTin" value="{{ old('ndkNgayDangTin') }}">
                            @error('ndkNgayDangTin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Ngày cập nhật -->
                        <div class="mb-3">
                            <label for="ndkNgayCapNhap" class="form-label">Ngày Cập Nhật</label>
                            <input type="datetime-local" class="form-control" id="ndkNgayCapNhap" name="ndkNgayCapNhap" value="{{ old('ndkNgayCapNhap') }}">
                            @error('ndkNgayCapNhap')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Trạng thái -->
                        <div class="mb-3">
                            <label for="ndkTrangThai" class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="ndkTrangThai1" name="ndkTrangThai" value="0" checked/>
                                <label for="ndkTrangThai1"> Hiển Thị</label>
                                &nbsp;
                                <input type="radio" id="ndkTrangThai0" name="ndkTrangThai" value="1"/>
                                <label for="ndkTrangThai0">Khóa</label>
                            </div>
                            @error('ndkTrangThai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Create</button>
                        <a href="{{ route('ndkadmins.ndktintuc') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection