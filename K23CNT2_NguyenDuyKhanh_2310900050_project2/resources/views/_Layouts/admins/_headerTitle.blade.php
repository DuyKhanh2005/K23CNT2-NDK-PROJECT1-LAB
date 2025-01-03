<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Header styling */
        header {
            background: linear-gradient(90deg, #4a6b8c, #414141); /* Gradient màu xanh dịu và màu đỏ */
            color: white;
            padding: 10px 0;
            box-shadow: 0 4px 6px rgba(179, 177, 177, 0.082); /* Shadow for modern look */
        }

        /* Logo styling */
        .logo img {
            max-height: 50px;
            border-radius: 5px;
        }

        /* Navigation links */
        .nav-link {
            color: white;
            font-weight: 500;
            margin: 0 10px;
            transition: color 0.3s ease-in-out;
        }

        .nav-link:hover {
            color: #ffcd39; /* Highlight màu vàng nhạt */
        }

        /* Search form */
        .search-form .form-control {
            border-radius: 20px 0 0 20px;
        }

        .search-form .btn {
            border-radius: 0 20px 20px 0;
            background-color: #ffcd39; /* Màu vàng nhạt */
            color: #343a40;
            border: none;
        }

        .search-form .btn:hover {
            background-color: #ffc107; /* Màu vàng đậm khi hover */
        }

        /* Account section */
        .account-info {
            font-size: 14px;
        }

        .account-info a {
            color: white;
            text-decoration: none;
            margin-left: 10px;
            font-weight: 500;
            transition: color 0.3s ease-in-out;
        }

        .account-info a:hover {
            color: #6b6657; /* Highlight màu vàng nhạt khi hover */
        }
    </style>
</head>
<body>
<header>
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <div class="logo">
            <a href="/ndk-admins">
                <img src="{{ asset('storage/img/san_pham/Logo.png') }}" alt="Logo">
            </a>
        </div>

        <!-- Navigation -->
        <nav class="d-flex align-items-center">
            <a href="/ndk-admins" class="nav-link">Trang chủ</a>
            <a href="/ndk-admins/ndkdanhsachquantri/ndksanpham" class="nav-link">Sản phẩm</a>
            <a href="/ndk-admins/ndk-khach-hang" class="nav-link">Liên hệ</a>
        </nav>

        <!-- Search Form -->
        <form action="{{ route('ndkuser.searchAdmins') }}" method="GET" class="search-form d-flex">
            <input type="text" class="form-control" placeholder="Tìm kiếm..." name="search">
            <button type="submit" class="btn">
                <i class="fas fa-search"></i>
            </button>
        </form>

        <!-- Account Info -->
        <div class="account-info d-flex align-items-center">
            <span>Xin chào, Duy Khánh</span>
            <a href="{{ route('admins.ndkLogin') }}">Đăng xuất</a>
        </div>
    </div>
</header>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
