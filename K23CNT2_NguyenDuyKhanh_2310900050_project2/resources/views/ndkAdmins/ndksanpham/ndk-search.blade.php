<!-- resources/views/ndkAdmins/ndksanpham/ndk-search.blade.php -->

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm sản phẩm</title>
</head>
<body>
    <h1>Tìm kiếm sản phẩm</h1>

    <!-- Form tìm kiếm -->
    <form method="GET" action="{{ route('ndkadmins.ndksanpham.search') }}">
        <input type="text" name="search" value="{{ old('search', $search) }}" placeholder="Tìm kiếm sản phẩm...">
        <button type="submit">Tìm kiếm</button>
    </form>

    <!-- Hiển thị kết quả tìm kiếm -->
    @if($products->count())
        <table border="1">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->ndkTenSanPham }}</td>
                        <td>{{ $product->ndkGia }}</td>
                        <td>{{ $product->ndkTrangThai == 1 ? 'Kích hoạt' : 'Không kích hoạt' }}</td>
                        <td>
                            <a href="{{ route('ndkadmins.ndksanpham.edit', $product->id) }}">Sửa</a> |
                            <form action="{{ route('ndkadmins.ndksanpham.delete', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Liên kết phân trang -->
        {{ $products->links() }}
    @else
        <p>Không tìm thấy sản phẩm nào.</p>
    @endif
</body>
</html>
