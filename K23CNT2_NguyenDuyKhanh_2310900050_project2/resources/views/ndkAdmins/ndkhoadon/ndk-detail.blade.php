@extends('_layouts.admins._master')
@section('title','Xem THông Tin Khách Hàng')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <div class="card">
                        <div class="card-header">
                            <h1>Chi Tiết Hóa Đơn</h1>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <b>Mã Hóa Đơn:</b>
                                {{$ndkhoadon->ndkMaHoaDon}}
                            </p>

                            <p class="card-text">
                                <b>Mã Khách Hàng:</b>
                                {{$ndkhoadon->ndkMaKhachHang}}
                            </p>

                            <p class="card-text">
                                <b>Ngày Hóa Đơn:</b>
                                {{$ndkhoadon->ndkNgayHoaDon}}
                            </p>

                            <p class="card-text">
                                <b>Ngày Nhận:</b>
                                {{$ndkhoadon->ndkNgayNhan}}
                            </p>


                            <p class="card-text">
                                <b>Họ Tên Khách Hàng:</b>
                                {{$ndkhoadon->ndkHoTenKhachHang}}
                            </p>
                            <p class="card-text">
                                <b>Email:</b>
                                {{$ndkhoadon->ndkEmail}}
                            </p>


                            <p class="card-text">
                                <b>Điện Thoại:</b>
                                {{$ndkhoadon->ndkDienThoai}}
                            </p>

                            <p class="card-text">
                                <b>Địa Chỉ:</b>
                                {{$ndkhoadon->ndkDiaChi}}
                            </p>

                            <p class="card-text">
                                <b>Tổng Giá Trị:</b>
                                {{ number_format($ndkhoadon->ndkTongGiaTri, 0, ',', '.') }} VND
                            </p>

                            <p class="card-text">
                                <b>Trạng Thái:</b>
                                {{$ndkhoadon->ndkTrangThai}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('ndkadmins.ndkhoadon')}}" class="btn btn-primary"> Back</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection