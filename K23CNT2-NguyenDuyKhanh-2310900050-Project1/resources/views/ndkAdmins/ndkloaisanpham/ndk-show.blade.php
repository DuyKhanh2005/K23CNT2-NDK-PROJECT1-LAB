<!-- resources/views/ndkAdmin/ndkloaisanpham/ndk-show.blade.php -->
@extends('_layouts.admins._master')

@section('title', 'Chi Tiết Loại Sản Phẩm')

@section('content-body')
    <div class="container">
        <h1>Chi Tiết Loại Sản Phẩm</h1>
        <div class="card">
            <div class="card-header">
                <h1>{{ $sanPham->ndkTenLoai }}</h1>
            </div>
            <div class="card-body">
                    <p>Mã Loại: {{ $sanPham->ndkMaLoai }}</p>
                    <p>Trạng Thái: {{ $sanPham->ndkTrangThai }}</p>
                <a href="{{ route('ndkAdmins.ndkloaisanpham.ndkList') }}" class="btn btn-secondary">Quay lại danh sách</a>
            </div>
        </div>
    </div>
@endsection
