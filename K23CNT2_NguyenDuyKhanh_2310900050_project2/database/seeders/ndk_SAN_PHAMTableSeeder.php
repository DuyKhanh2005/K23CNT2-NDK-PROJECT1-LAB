<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ndk_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'ndkMaSanPham' => 'SS001',
                'ndkTenSanPham' => 'Asus ROG Phone 5',
                'ndkHinhAnh' => asset('img/san_pham/Asus-ROG-Phone-5.jpg'),
                'ndkSoLuong' => 23,
                'ndkDonGia' => 16990000,
                'ndkMaLoai' => 2,
                'ndkMoTa' => 'Asus ROG Phone 5

                    Màn hình: 6.78 inch AMOLED, độ phân giải Full HD+ (2448 x 1080), 144Hz, 300Hz cảm ứng
                    Chipset: Qualcomm Snapdragon 888, GPU Adreno 660
                    
                    RAM: Tùy chọn 8GB, 12GB, 16GB
                    
                    Bộ nhớ trong: 128GB, 256GB (UFS 3.1, không hỗ trợ thẻ nhớ microSD)
                    
                    Camera: Camera chính 64MP, camera siêu rộng 13MP, camera macro 5MP
                    
                    Pin: 6000mAh, sạc nhanh 65W
                    
                    Thiết kế: Khung nhựa cao cấp, mặt lưng nhựa với đèn LED RGB ROG
                    
                    Kết nối: 5G, Wi-Fi 6E, Bluetooth 5.2, USB-C
                    
                    Hệ điều hành: Android 11, ROG UI
                    
                    Tính năng nổi bật: Hệ thống làm mát GameCool 5, nút cảm ứng AirTrigger, loa stereo, màn hình AMOLED 144Hz, hỗ trợ sạc nhanh 65W
                    
                    Asus ROG Phone 5 là một trong những điện thoại chơi game mạnh mẽ, sở hữu phần cứng xuất sắc và các tính năng chuyên biệt cho game thủ, từ hiệu suất đến khả năng làm mát và âm thanh chất lượng cao.',
                'ndkTrangThai' => 0,
            ],
            [
                'ndkMaSanPham' => 'IP001',
                'ndkTenSanPham' => 'Iphone 15 Pro',
                'ndkHinhAnh' => asset('img/san_pham/Iphone-15-Pro.jpg'),
                'ndkSoLuong' => 99,
                'ndkDonGia' => 28590000,
                'ndkMaLoai' => 1,
                'ndkMoTa' => 'iPhone 15 Pro 256GB

                    Màn hình: 6.1 inch Super Retina XDR OLED, hỗ trợ ProMotion (120Hz)
                    
                    Chipset: Apple A17 Pro, hiệu suất mạnh mẽ, tiết kiệm năng lượng
                    
                    Camera: Camera chính 48MP, camera telephoto 3x, camera siêu rộng 12MP
                    
                    Bộ nhớ: 256GB, không hỗ trợ thẻ nhớ ngoài
                    
                    Thiết kế: Khung titan siêu nhẹ, mặt lưng kính mờ
                    
                    Pin: Thời gian sử dụng lên đến 23 giờ xem video
                    
                    Kết nối: USB-C, 5G, Wi-Fi 6E
                    
                    Hệ điều hành: iOS 17
                    
                    Tính năng nổi bật: Dynamic Island, MagSafe, tính năng AI và AR mạnh mẽ
                    
                    Một chiếc điện thoại cao cấp với hiệu suất tuyệt vời, camera sắc nét và thiết kế sang trọng.',
                'ndkTrangThai' => 0,
            ],
            [
                'ndkMaSanPham' => 'HW001',
                'ndkTenSanPham' => 'SamSung Galaxy S23 Ultra',
                'ndkHinhAnh' => asset('img/san_pham/Samsung-S23_Ultra.jpg'),
                'ndkSoLuong' => 150,
                'ndkDonGia' => 22490000,
                'ndkMaLoai' => 3,
                'ndkMoTa' => 'Samsung Galaxy S23 Ultra

                    
                    Màn hình: 6.8 inch Dynamic AMOLED 2X, độ phân giải 3088 x 1440, 120Hz, hỗ trợ HDR10+
                    
                    Chipset: Qualcomm Snapdragon 8 Gen 2, hiệu năng mạnh mẽ và tiết kiệm năng lượng
                    
                    Camera: Camera chính 200MP, camera siêu rộng 12MP, 2 camera telephoto 10MP (3x và 10x zoom quang học)
                    
                    Bộ nhớ: 12GB RAM, các tùy chọn bộ nhớ trong 256GB, 512GB, 1TB
                    
                    Pin: 5000mAh, sạc nhanh 45W, sạc không dây 15W
                    
                    Thiết kế: Khung kim loại, mặt lưng kính Gorilla Glass Victus 2
                    
                    Kết nối: 5G, Wi-Fi 6E, Bluetooth 5.3, USB-C
                    
                    Hệ điều hành: Android 13, One UI 5.1
                    
                    Tính năng nổi bật: S Pen tích hợp, camera 200MP với khả năng zoom mạnh mẽ, chế độ chụp đêm, màn hình siêu mượt với tốc độ làm mới 120Hz
                    
                    Galaxy S23 Ultra là lựa chọn cao cấp với camera ấn tượng và khả năng xử lý mạnh mẽ, phù hợp cho những ai đam mê công nghệ và nhiếp ảnh.',
                'ndkTrangThai' => 0,
            ],
            [
                'ndkMaSanPham' => 'IP002',
                'ndkTenSanPham' => 'Điện Thoại Iphone 15 Pro',
                'ndkHinhAnh' => asset('img/san_pham/Iphone-15-Pro.jpg'),
                'ndkSoLuong' => 99,
                'ndkDonGia' => 28590000,
                'ndkMaLoai' => 1,
                'ndkMoTa' => 'iPhone 15 Pro 256GB

                    Màn hình: 6.1 inch Super Retina XDR OLED, hỗ trợ ProMotion (120Hz)
                    
                    Chipset: Apple A17 Pro, hiệu suất mạnh mẽ, tiết kiệm năng lượng
                    
                    Camera: Camera chính 48MP, camera telephoto 3x, camera siêu rộng 12MP
                    
                    Bộ nhớ: 256GB, không hỗ trợ thẻ nhớ ngoài
                    
                    Thiết kế: Khung titan siêu nhẹ, mặt lưng kính mờ
                    
                    Pin: Thời gian sử dụng lên đến 23 giờ xem video
                    
                    Kết nối: USB-C, 5G, Wi-Fi 6E
                    
                    Hệ điều hành: iOS 17
                    
                    Tính năng nổi bật: Dynamic Island, MagSafe, tính năng AI và AR mạnh mẽ
                    
                    Một chiếc điện thoại cao cấp với hiệu suất tuyệt vời, camera sắc nét và thiết kế sang trọng.',
                'ndkTrangThai' => 0,
            ],
            [
                'ndkMaSanPham' => 'SS002',
                'ndkTenSanPham' => 'Asus ROG Phone 5',
                'ndkHinhAnh' => asset('img/san_pham/Asus-ROG-Phone-5.jpg'),
                'ndkSoLuong' => 23,
                'ndkDonGia' => 16990000,
                'ndkMaLoai' => 2,
                'ndkMoTa' => 'Asus ROG Phone 5

                    Màn hình: 6.78 inch AMOLED, độ phân giải Full HD+ (2448 x 1080), 144Hz, 300Hz cảm ứng
                    
                    Chipset: Qualcomm Snapdragon 888, GPU Adreno 660
                    
                    RAM: Tùy chọn 8GB, 12GB, 16GB
                    
                    Bộ nhớ trong: 128GB, 256GB (UFS 3.1, không hỗ trợ thẻ nhớ microSD)
                    
                    Camera: Camera chính 64MP, camera siêu rộng 13MP, camera macro 5MP
                    
                    Pin: 6000mAh, sạc nhanh 65W
                    
                    Thiết kế: Khung nhựa cao cấp, mặt lưng nhựa với đèn LED RGB ROG
                    
                    Kết nối: 5G, Wi-Fi 6E, Bluetooth 5.2, USB-C
                    
                    Hệ điều hành: Android 11, ROG UI
                    
                    Tính năng nổi bật: Hệ thống làm mát GameCool 5, nút cảm ứng AirTrigger, loa stereo, màn hình AMOLED 144Hz, hỗ trợ sạc nhanh 65W
                    
                    Asus ROG Phone 5 là một trong những điện thoại chơi game mạnh mẽ, sở hữu phần cứng xuất sắc và các tính năng chuyên biệt cho game thủ, từ hiệu suất đến khả năng làm mát và âm thanh chất lượng cao.',
                'ndkTrangThai' => 0,
            ],
            [
                'ndkMaSanPham' => 'HW002',
                'ndkTenSanPham' => 'SamSung Galaxy S23 Ultra',
                'ndkHinhAnh' => asset('img/san_pham/Samsung-S23_Ultra.jpg'),
                'ndkSoLuong' => 150,
                'ndkDonGia' => 22490000,
                'ndkMaLoai' => 3,
                'ndkMoTa' => 'Samsung Galaxy S23 Ultra

                    Màn hình: 6.8 inch Dynamic AMOLED 2X, độ phân giải 3088 x 1440, 120Hz, hỗ trợ HDR10+
                    
                    Chipset: Qualcomm Snapdragon 8 Gen 2, hiệu năng mạnh mẽ và tiết kiệm năng lượng
                    
                    Camera: Camera chính 200MP, camera siêu rộng 12MP, 2 camera telephoto 10MP (3x và 10x zoom quang học)
                    
                    Bộ nhớ: 12GB RAM, các tùy chọn bộ nhớ trong 256GB, 512GB, 1TB
                    
                    Pin: 5000mAh, sạc nhanh 45W, sạc không dây 15W
                    
                    Thiết kế: Khung kim loại, mặt lưng kính Gorilla Glass Victus 2
                    
                    Kết nối: 5G, Wi-Fi 6E, Bluetooth 5.3, USB-C
                    
                    Hệ điều hành: Android 13, One UI 5.1
                    
                    Tính năng nổi bật: S Pen tích hợp, camera 200MP với khả năng zoom mạnh mẽ, chế độ chụp đêm, màn hình siêu mượt với tốc độ làm mới 120Hz
                    
                    Galaxy S23 Ultra là lựa chọn cao cấp với camera ấn tượng và khả năng xử lý mạnh mẽ, phù hợp cho những ai đam mê công nghệ và nhiếp ảnh.',
                'ndkTrangThai' => 0,
            ],
        ];
        foreach ($products as $product) {
            DB::table('ndk_SAN_PHAM')->insert($product);
        }
    }
}
