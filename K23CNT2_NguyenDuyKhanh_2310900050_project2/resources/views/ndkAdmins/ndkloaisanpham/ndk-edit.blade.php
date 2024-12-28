@extends('_layouts.admins._master')
@section('title','Sửa Loại Sản Phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <!-- Update the form action route to pass the ndkMaLoai as a parameter -->
                <form action="{{ route('ndkadmin.ndkloaisanpham.ndkEditSubmit') }}" method="POST">
                    @csrf
                    <!-- Hidden input for the ID -->
                    <input type="hidden" name="id" value="{{ $ndkloaisanpham->id }}">

                    <div class="card">
                        <div class="card-header">
                            <h1>Sửa loại sản phẩm</h1>
                        </div>
                        <div class="card-body">
                            <!-- Mã Loại (disabled) -->
                            <div class="mb-3">
                                <label for="ndkMaLoai" class="form-label">Mã Loại</label>
                                <input type="text" class="form-control" id="ndkMaLoai" name="ndkMaLoai" value="{{ $ndkloaisanpham->ndkMaLoai }}" >
                                @error('ndkMaLoai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            <!-- Tên Loại -->
                            <div class="mb-3">
                                <label for="ndkTenLoai" class="form-label">Tên Loại</label>
                                <input type="text" class="form-control" id="ndkTenLoai" name="ndkTenLoai" value="{{ old('ndkTenLoai', $ndkloaisanpham->ndkTenLoai) }}" >
                                @error('ndkTenLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Trạng Thái -->
                            <div class="mb-3">
                                <label for="ndkTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="ndkTrangThai1" name="ndkTrangThai" value="1" {{ old('ndkTrangThai', $ndkloaisanpham->ndkTrangThai) == 1 ? 'checked' : '' }} />
                                    <label for="ndkTrangThai1">Khóa</label>
                                    &nbsp;
                                    <input type="radio" id="ndkTrangThai0" name="ndkTrangThai" value="0" {{ old('ndkTrangThai', $ndkloaisanpham->ndkTrangThai) == 0 ? 'checked' : '' }} />
                                    <label for="ndkTrangThai0">Hiển Thị</label>
                                </div>
                                @error('ndkTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="card-footer">
                            <!-- Change button label to "Cập nhật" (Update) -->
                            <button class="btn btn-success" type="submit">Cập nhật</button>
                            <a href="{{ route('ndkadmins.ndkloaisanpham') }}" class="btn btn-primary">Trở lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection