@extends('_layouts.admins._master')

@section('title', 'Chỉnh Sửa Tin Tức')

@section('content-body')
<div class="container border mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Chỉnh Sửa Tin Tức</h1>
                </div>
                <div class="card-body">
                    <!-- Form chỉnh sửa tin tức -->
                    <form action="{{ route('ndkadmin.ndktintuc.ndkEditSubmit', $ndktinTuc->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <!-- Tiêu đề tin tức -->
                        <div class="mb-3">
                            <label for="ndkTieuDe" class="form-label">Tiêu đề tin tức</label>
                            <input type="text" name="ndkTieuDe" class="form-control" value="{{ old('ndkTieuDe', $ndktinTuc->ndkTieuDe) }}">
                            @error('ndkTieuDe')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Mô tả tin tức -->
                        <div class="mb-3">
                            <label for="ndkMoTa" class="form-label">Mô tả tin tức</label>
                            <input type="text" name="ndkMoTa" class="form-control" value="{{ old('ndkMoTa', $ndktinTuc->ndkMoTa) }}">
                            @error('ndkMoTa')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Nội dung tin tức -->
                        <div class="mb-3">
                            <label for="ndkNoiDung" class="form-label">Nội dung tin tức</label>
                            <textarea name="ndkNoiDung" class="form-control" rows="5">{{ old('ndkNoiDung', $ndktinTuc->ndkNoiDung) }}</textarea>
                            @error('ndkNoiDung')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Hình ảnh tin tức -->
                        <div class="mb-3">
                            <label for="ndkHinhAnh" class="form-label">Hình ảnh</label>
                            <input type="file" name="ndkHinhAnh" class="form-control">
                            @if($ndktinTuc->ndkHinhAnh)
                                <img src="{{ asset('storage/' . $ndktinTuc->ndkHinhAnh) }}" alt="Tin tức {{ $ndktinTuc->ndkTieuDe }}" width="200" class="mt-2">
                            @endif
                            @error('ndkHinhAnh')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Ngày đăng -->
                        <div class="mb-3">
                            <label for="ndkNgayDangTin" class="form-label">Ngày Đăng</label>
                            <input type="datetime-local" name="ndkNgayDangTin" class="form-control" value="{{ old('ndkNgayDangTin', $ndktinTuc->ndkNgayDangTin) }}">
                            @error('ndkNgayDangTin')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Ngày cập nhật -->
                        <div class="mb-3">
                            <label for="ndkNgayCapNhap" class="form-label">Ngày Cập Nhật</label>
                            <input type="datetime-local" name="ndkNgayCapNhap" class="form-control" value="{{ old('ndkNgayCapNhap', $ndktinTuc->ndkNgayCapNhap) }}">
                            @error('ndkNgayCapNhap')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Trạng thái -->
                        <div class="mb-3">
                            <label for="ndkTrangThai" class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="ndkTrangThai1" name="ndkTrangThai" value="1" {{ old('ndkTrangThai', $ndktinTuc->ndkTrangThai) == 1 ? 'checked' : '' }} />
                                <label for="ndkTrangThai1">Khóa</label>
                                &nbsp;
                                <input type="radio" id="ndkTrangThai0" name="ndkTrangThai" value="0" {{ old('ndkTrangThai', $ndktinTuc->ndkTrangThai) == 0 ? 'checked' : '' }} />
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
                    <!-- Nút quay lại danh sách tin tức -->
                    <a href="{{ route('ndkadmins.ndktintuc') }}" class="btn btn-secondary">Quay lại danh sách</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection