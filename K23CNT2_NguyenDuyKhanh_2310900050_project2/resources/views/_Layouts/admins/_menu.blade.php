<ul class="list-group">
    <!-- Hiển thị tên tài khoản nếu đã đăng nhập -->
    <li class="list-group-item active" style="color: red; background:black;">
        @if(Session::has('username'))
            <span class="fw-bold">Hello, {{ Session::get('username') }}</span>
        @else
            <a href="/ndk-admins/login" class="text-decoration-none text-dark">Đăng nhập</a>
        @endif
    </li>

    <li class="list-group-item active" aria-current="true">
        <strong>Quản Trị Nội Dung</strong>
    </li>


    <li class="list-group-item">
        <a href="/ndk-admins/ndkdanhsachquantri/ndkdanhmuc" class="text-decoration-none text-dark">Danh Sách Quản Trị</a>
    </li>

    <li class="list-group-item">
        <a href="/ndk-admins/ndk-quan-tri" class="text-decoration-none text-dark">Quản trị Viên</a>
    </li>

    <li class="list-group-item">
        <a href="/ndk-admins/ndk-loai-san-pham" class="text-decoration-none text-dark">Loại Sản Phẩm</a>
    </li>

    <li class="list-group-item">
        <a href="/ndk-admins/ndk-san-pham" class="text-decoration-none text-dark">Sản Phẩm</a>
    </li>

    <li class="list-group-item">
        <a href="/ndk-admins/ndk-khach-hang" class="text-decoration-none text-dark">Khách Hàng</a>
    </li>

    <li class="list-group-item">
        <a href="/ndk-admins/ndk-hoa-don" class="text-decoration-none text-dark">Hóa Đơn</a>
    </li>

    <li class="list-group-item">
        <a href="/ndk-admins/ndk-ct-hoa-don" class="text-decoration-none text-dark">Chi Tiết Hóa Đơn</a>
    </li>

    <li class="list-group-item">
        <a href="/ndk-admins/ndk-tin-tuc" class="text-decoration-none text-dark">Tin Tức</a>
    </li>

</ul>