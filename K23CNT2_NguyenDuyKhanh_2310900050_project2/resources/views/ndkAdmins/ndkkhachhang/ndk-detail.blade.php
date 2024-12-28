@extends('_layouts.admins._master')
@section('title','Xem THông Tin Khách Hàng')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <div class="card">
                        <div class="card-header">
                            <h1>Chi Tiết Khách Hàng</h1>
                        </div>
                        <div class="card-body">

                            <p class="card-text">
                                <b>Mã Khách Hàng:</b>
                                {{$ndkkhachhang->ndkMaKhachHang}}
                            </p>
                            <p class="card-text">
                                <b>Họ Tên Khách Hàng:</b>
                                {{$ndkkhachhang->ndkHoTenKhachHang}}
                            </p>
                            <p class="card-text">
                                <b>Email:</b>
                                {{$ndkkhachhang->ndkEmail}}
                            </p>

                            <p class="card-text">
                                <b>Mật Khẩu:</b>
                                {{$ndkkhachhang->ndkMatKhau}}
                            </p>

                            <p class="card-text">
                                <b>Điện Thoại:</b>
                                {{$ndkkhachhang->ndkDienThoai}}
                            </p>

                            <p class="card-text">
                                <b>Địa Chỉ:</b>
                                {{$ndkkhachhang->ndkDiaChi}}
                            </p>

                            <p class="card-text">
                                <b>Ngày Đăng Ký:</b>
                                {{$ndkkhachhang->ndkNgayDangKy}}
                            </p>

                            <p class="card-text">
                                <b>Trạng Thái:</b>
                                {{$ndkkhachhang->ndkTrangThai}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('ndkadmins.ndkkhachhang')}}" class="btn btn-primary"> Back</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection