@extends('_layouts.admins._master')
@section('title','Sửa Loại Hóa Đơn')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <!-- Update the form action route to pass the ndkMaKhachHang as a parameter -->
                <form action="{{ route('ndkadmin.ndkhoadon.ndkEditSubmit', ['id' => $ndkhoadon->id]) }}" method="POST">
                    @csrf
                    <!-- Hidden input for the ID -->
                    <input type="hidden" name="id" value="{{ $ndkhoadon->id }}">

                    <div class="card">
                        <div class="card-header">
                            <h1>Sửa loại Hóa Đơn</h1>
                        </div>
                        <div class="card-body">
                            <!-- Mã Loại (disabled) -->
                            <div class="mb-3">
                                <label for="ndkMaHoaDon" class="form-label">Mã Hóa Đơn</label>
                                <input type="text" class="form-control" id="ndkMaHoaDon" name="ndkMaHoaDon" value="{{ $ndkhoadon->ndkMaHoaDon }}" >
                                @error('ndkMaHoaDon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkMaKhachHang" class="form-label">Khách Hàng</label>
                                <select name="ndkMaKhachHang" id="ndkMaKhachHang" class="form-control">
                                    @foreach ($ndkkhachhang as $item)
                                        <option value="{{ $item->id }}" 
                                            {{ old('ndkMaKhachHang', $ndkhoadon->ndkMaKhachHang) == $item->id ? 'selected' : '' }}>
                                            {{ $item->ndkHoTenKhachHang }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('ndkMaKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                             
                             <div class="mb-3">
                                <label for="ndkNgayHoaDon" class="form-label">Ngày Hóa Đơn</label>
                                <input type="date" class="form-control" id="ndkNgayHoaDon" name="ndkNgayHoaDon" value="{{ old('ndkNgayHoaDon', $ndkhoadon->ndkNgayHoaDon) }}" >
                                @error('ndkNgayHoaDon')
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>

                             <div class="mb-3">
                                <label for="ndkNgayNhan" class="form-label">Ngày Nhận</label>
                                <input type="date" class="form-control" id="ndkNgayNhan" name="ndkNgayNhan" value="{{ old('ndkNgayNhan', $ndkhoadon->ndkNgayNhan) }}" >
                                @error('ndkNgayNhan')
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>


                            <!-- Tên Loại -->
                            <div class="mb-3">
                                <label for="ndkHoTenKhachHang" class="form-label">Họ Tên Khách Hàng</label>
                                <input type="text" class="form-control" id="ndkHoTenKhachHang" name="ndkHoTenKhachHang" value="{{ old('ndkHoTenKhachHang', $ndkhoadon->ndkHoTenKhachHang) }}" >
                                @error('ndkHoTenKhachHang')
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="ndkEmail" name="ndkEmail" value="{{ old('ndkEmail', $ndkhoadon->ndkEmail) }}" >
                                @error('ndkEmail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            

                            <div class="mb-3">
                                <label for="ndkDienThoai" class="form-label">Điện Thoại</label>
                                <input type="tel" class="form-control" id="ndkDienThoai" name="ndkDienThoai" value="{{ old('ndkDienThoai', $ndkhoadon->ndkDienThoai) }}" >
                                @error('ndkDienThoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkDiaChi" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control" id="ndkDiaChi" name="ndkDiaChi" value="{{ old('ndkDiaChi', $ndkhoadon->ndkDiaChi) }}" >
                                @error('ndkDiaChi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ndkTongGiaTri" class="form-label">Tổng Giá Trị</label>
                                <input type="number" class="form-control" id="ndkTongGiaTri" name="ndkTongGiaTri" value="{{ old('ndkTongGiaTri', $ndkhoadon->ndkTongGiaTri) }}" >
                                @error('ndkTongGiaTri')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Trạng Thái -->
                            <div class="mb-3">
                                <label for="ndkTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="ndkTrangThai0" name="ndkTrangThai" value="0" {{ old('ndkTrangThai', $ndkhoadon->ndkTrangThai) == 0 ? 'checked' : '' }} />
                                    <label for="ndkTrangThai0">Chờ Sử Lý</label>
                                    &nbsp;
                                    <input type="radio" id="ndkTrangThai1" name="ndkTrangThai" value="1" {{ old('ndkTrangThai', $ndkhoadon->ndkTrangThai) == 1 ? 'checked' : '' }} />
                                    <label for="ndkTrangThai1">Đang Sử Lý</label>
                           
                                    &nbsp;
                                    <input type="radio" id="ndkTrangThai2" name="ndkTrangThai" value="2" {{ old('ndkTrangThai', $ndkhoadon->ndkTrangThai) == 2 ? 'checked' : '' }} />
                                    <label for="ndkTrangThai0">Đã Hoàn Thành</label>
                                </div>
                                @error('ndkTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="card-footer">
                            <!-- Change button label to (edit) -->
                            <button class="btn btn-success" type="submit">Sửa</button>
                            <a href="{{ route('ndkadmins.ndkhoadon') }}" class="btn btn-primary">Trở lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection