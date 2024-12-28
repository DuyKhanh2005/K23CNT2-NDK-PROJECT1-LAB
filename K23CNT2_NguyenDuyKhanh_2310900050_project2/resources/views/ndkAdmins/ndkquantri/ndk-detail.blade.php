@extends('_layouts.admins._master')
@section('title','Create  Sản Phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('ndkadmin.ndksanpham.ndkCreateSubmit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới sản phẩm</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="ndkMaSanPham" class="form-label">Mã sản phẩm</label>
                                <input type="text" class="form-control" id="ndkMaSanPham" name="ndkMaSanPham" value="{{ old('ndkMaSanPham') }}" >
                                @error('ndkMaSanPham')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkTenSanPham" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="ndkTenSanPham" name="ndkTenSanPham" value="{{ old('ndkTenSanPham') }}" >
                                @error('ndkTenSanPham')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="ndkHinhAnh" class="form-label">Hình Ảnh</label>
                                <input type="file" class="form-control" id="ndkHinhAnh" name="ndkHinhAnh" accept="image/*">
                                @error('ndkHinhAnh')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            

                            <div class="mb-3">
                                <label for="ndkSoLuong" class="form-label">Số Lượng</label>
                                <input type="number" class="form-control" id="ndkSoLuong" name="ndkSoLuong" value="{{ old('ndkSoLuong') }}" >
                                @error('ndkSoLuong')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkDonGia" class="form-label">Đơn Giá</label>
                                <input type="number" class="form-control" id="ndkDonGia" name="ndkDonGia" value="{{ old('ndkDonGia') }}" >
                                @error('ndkDonGia')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkMaLoai" class="form-label">Loại Danh Muc</label>
                                <select name="ndkMaLoai" id="ndkMaLoai" class="form-control">
                                    @foreach ($ndkloaisanpham as $item)
                                        <option value="{{ $item->id }}">{{ $item->ndkTenLoai }}</option>
                                    @endforeach
                                </select>
                                @error('ndkMaLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            

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
                            <a href="{{route('ndkadims.ndksanpham')}}" class="btn btn-primary"> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection