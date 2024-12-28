@extends('_layouts.admins._master')
@section('title','Thêm Mới Loại Sản Phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{ route('ndkAdmins.ndkloaisanpham.ndkCreateSubmit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới Loại Sản Phẩm</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="ndkMaLoai" class="form-label">Mã Loại</label>
                                <input type="text" class="form-control" id="ndkMaLoai" name="ndkMaLoai" value="{{ old('ndkMaLoai') }}" >
                                @error('ndkMaLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkTenLoai" class="form-label">Tên Loại</label>
                                <input type="text" class="form-control" id="ndkTenLoai" name="ndkTenLoai" value="{{ old('ndkTenLoai') }}" >
                                @error('ndkTenLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="ndkTrangThai0" name="ndkTrangThai" value="0" checked/>
                                    <label for="ndkTrangThai0"> Hiển Thị</label>
                                    &nbsp;
                                    <input type="radio" id="ndkTrangThai1" name="ndkTrangThai" value="1"/>
                                    <label for="ndkTrangThai1"> Khóa</label>
                                </div>
                                @error('ndkTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Thêm Mới</button>
                            <a href="{{ route('ndkAdmins.ndkloaisanpham.list') }}" class="btn btn-primary">Quay Lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
