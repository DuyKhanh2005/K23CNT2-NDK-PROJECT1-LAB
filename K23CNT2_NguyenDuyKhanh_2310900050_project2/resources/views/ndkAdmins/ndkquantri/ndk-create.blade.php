@extends('_layouts.admins._master')
@section('title', 'Thêm Quản Trị Viên')

@section('content-body')
    <div class="container">
        <form action="{{ route('ndkadmin.ndkquantri.ndkCreateSubmit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="ndkTaiKhoan">Tài Khoản</label>
                <input type="text" class="form-control" id="ndkTaiKhoan" name="ndkTaiKhoan" required>
                @error('ndkTaiKhoan') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="ndkMatKhau">Mật Khẩu</label>
                <input type="password" class="form-control" id="ndkMatKhau" name="ndkMatKhau" required>
                @error('ndkMatKhau') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="ndkTrangThai">Trạng Thái</label>
                <select name="ndkTrangThai" id="ndkTrangThai" class="form-control" required>
                    <option value="0">Cho Phép Đăng Nhập</option>
                    <option value="1">Khóa</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Thêm Quản Trị Viên</button>
        </form>
    </div>
@endsection