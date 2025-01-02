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
            background: linear-gradient(90deg,  #7e2914, #be6d6d); /* Gradient background */
            color: white;
            padding: 10px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Shadow for modern look */
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
            color: #ffc107; /* Highlight color */
        }

        /* Search form */
        .search-form .form-control {
            border-radius: 20px 0 0 20px;
        }

        .search-form .btn {
            border-radius: 0 20px 20px 0;
            background-color: #ffc107;
            color: #343a40;
            border: none;
        }

        .search-form .btn:hover {
            background-color: #ffcd39;
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
            color: #ffc107;
        }
    </style>
</head>
<body>
<header>
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <div class="logo">
            <a href="/ndk-admins">
                <img src="{{ asset('storage/img/san_pham/Logo-S.jpg') }}" alt="Logo">
            </a>
        </div>

        <!-- Navigation -->
        <nav class="d-flex align-items-center">
            <a href="/ndk-admins" class="nav-link">Trang chủ</a> <!-- Trang chủ -->
            <a href="/ndk-admins/ndkdanhsachquantri/ndksanpham" class="nav-link">Sản phẩm</a> <!-- Quản lý sản phẩm -->
            <a href="/ndk-admins/ndk-khach-hang" class="nav-link">Liên hệ</a> <!-- Trang liên hệ -->
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
