@extends('_layouts.admins._master')
@section('title','Chỉnh Sửa Chi Tiết Hóa Đơn')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{ route('ndkadmin.ndkcthoadon.ndkEditSubmit', $ndkcthoadon->id) }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="card">
                        <div class="card-header">
                            <h1>Chỉnh Sửa Chi Tiết Hóa Đơn</h1>
                        </div>

                        <div class="mb-3">
                            <label for="ndkHoaDonID" class="form-label">Mã Hóa Đơn</label>
                            <select name="ndkHoaDonID" id="ndkHoaDonID" class="form-control">
                                @foreach ($ndkhoadon as $item)
                                    <option value="{{ $item->id }}" {{ $ndkcthoadon->ndkHoaDonID == $item->id ? 'selected' : '' }}>{{ $item->ndkMaHoaDon }}</option>
                                @endforeach
                            </select>
                            @error('ndkHoaDonID')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="ndkSanPhamID" class="form-label">Mã Sản Phẩm</label>
                            <select name="ndkSanPhamID" id="ndkSanPhamID" class="form-control">
                                @foreach ($ndksanpham as $item)
                                    <option value="{{ $item->id }}" {{ $ndkcthoadon->ndkSanPhamID == $item->id ? 'selected' : '' }}>{{ $item->ndkMaSanPham }}</option>
                                @endforeach
                            </select>
                            @error('ndkSanPhamID')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="ndkSoLuongMua" class="form-label">Số Lượng Mua</label>
                            <input type="number" class="form-control" id="ndkSoLuongMua" name="ndkSoLuongMua" value="{{ old('ndkSoLuongMua', $ndkcthoadon->ndkSoLuongMua) }}" min="1" oninput="calculateThanhTien()">
                            @error('ndkSoLuongMua')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="ndkDonGiaMua" class="form-label">Đơn Giá Mua</label>
                            <input type="number" class="form-control" id="ndkDonGiaMua" name="ndkDonGiaMua" value="{{ old('ndkDonGiaMua', $ndkcthoadon->ndkDonGiaMua) }}" oninput="calculateThanhTien()">
                            @error('ndkDonGiaMua')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="ndkThanhTien" class="form-label">Thành Tiền</label>
                            <input type="number" class="form-control" id="ndkThanhTien" name="ndkThanhTien" value="{{ old('ndkThanhTien', $ndkcthoadon->ndkThanhTien) }}" readonly>
                            @error('ndkThanhTien')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="ndkTrangThai" class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="ndkTrangThai0" name="ndkTrangThai" value="0" {{ $ndkcthoadon->ndkTrangThai == 0 ? 'checked' : '' }} />
                                <label for="ndkTrangThai0">Hoàn Thành</label>
                                &nbsp;
                                <input type="radio" id="ndkTrangThai1" name="ndkTrangThai" value="1" {{ $ndkcthoadon->ndkTrangThai == 1 ? 'checked' : '' }} />
                                <label for="ndkTrangThai1">Trả Lại</label>
                                &nbsp;
                                <input type="radio" id="ndkTrangThai2" name="ndkTrangThai" value="2" {{ $ndkcthoadon->ndkTrangThai == 2 ? 'checked' : '' }} />
                                <label for="ndkTrangThai2">Xóa</label>
                            </div>
                            @error('ndkTrangThai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-success">Cập Nhật</button>
                            <a href="{{ route('ndkadmins.ndkcthoadon') }}" class="btn btn-primary">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Hàm tính Thành Tiền
        function calculateThanhTien() {
            var quantity = parseFloat(document.getElementById('ndkSoLuongMua').value);
            var unitPrice = parseFloat(document.getElementById('ndkDonGiaMua').value);
            var thanhTien = quantity * unitPrice;
            document.getElementById('ndkThanhTien').value = thanhTien.toFixed(2);  // Làm tròn đến 2 chữ số thập phân
        }
    </script>
@endsection