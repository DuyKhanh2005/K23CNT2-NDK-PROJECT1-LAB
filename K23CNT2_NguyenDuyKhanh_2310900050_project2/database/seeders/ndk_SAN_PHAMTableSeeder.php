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
                'ndkTenSanPham' => ' Crush 80',
                'ndkHinhAnh' => asset('img/san_pham/Crush-80.webp'),
                'ndkSoLuong' => 23,
                'ndkDonGia' => 2350000,
                'ndkMaLoai' => 2,
                'ndkMoTa' => 'Bàn phím cơ Crush 80 là dòng TKL (80%) nhỏ gọn, phù hợp cho cả làm việc và chơi game.

                    Switch hot-swap: Linh hoạt thay đổi, hỗ trợ nhiều loại switch.
                    Keycap PBT Dye-sub: Bền bỉ, chống bóng.
                    LED RGB đa vùng: Hiệu ứng ánh sáng tùy chỉnh đẹp mắt.
                    Kết nối USB-C: Tốc độ truyền tải nhanh, ổn định.
                    Thiết kế cao cấp, hiệu năng vượt trội, Crush 80 là lựa chọn hoàn hảo cho người dùng yêu thích sự gọn nhẹ và tiện lợi.',
                'ndkTrangThai' => 0,
            ],
            [
                'ndkMaSanPham' => 'IP001',
                'ndkTenSanPham' => 'FuryCube-F75',
                'ndkHinhAnh' => asset('img/san_pham/FuryCube-F75.webp'),
                'ndkSoLuong' => 23,
                'ndkDonGia' => 1650000,
                'ndkMaLoai' => 1,
                'ndkMoTa' => 'Bàn phím cơ Fury Cube F75 nổi bật với:

Kích thước 75%: Nhỏ gọn, tiện lợi nhưng vẫn đầy đủ phím chức năng.
Switch cao cấp: Lựa chọn Gateron, Cherry MX hoặc TTC, tuổi thọ lên đến 50 triệu lần nhấn.
Keycap PBT Double-shot: Bền bỉ, chống mài mòn, mang lại cảm giác gõ tốt hơn.
LED RGB tùy chỉnh: Nhiều hiệu ứng ánh sáng rực rỡ, phù hợp cho cả làm việc và chơi game.
Kết nối linh hoạt: Hỗ trợ cả có dây (USB-C) và không dây (Bluetooth 5.0), đảm bảo độ ổn định cao.
Chế độ NKRO: Nhấn đồng thời nhiều phím mà không lo xung đột.
Đây là bàn phím dành cho những ai yêu thích sự gọn nhẹ, hiệu năng cao, và thẩm mỹ hiện đại.',
                'ndkTrangThai' => 0,
            ],
            [
                'ndkMaSanPham' => 'HW001',
                'ndkTenSanPham' => 'Lucky65-V2',
                'ndkHinhAnh' => asset('img/san_pham/Lucky65-V2.webp'),
                'ndkSoLuong' => 150,
                'ndkDonGia' => 950000,
                'ndkMaLoai' => 3,
                'ndkMoTa' => 'Bàn phím cơ Lucky65 V2 là sự kết hợp hoàn hảo giữa thiết kế nhỏ gọn và hiệu năng mạnh mẽ, mang đến trải nghiệm gõ phím tuyệt vời.

Đặc điểm nổi bật
Layout 65%: Tinh giản, tiết kiệm không gian nhưng vẫn giữ đầy đủ phím chức năng cần thiết.
Switch hot-swap: Thay đổi switch dễ dàng, tương thích nhiều loại switch khác nhau.
Keycap PBT Double-shot: Bền, chống bóng và mang lại cảm giác gõ chắc tay.
LED RGB: Ánh sáng rực rỡ với nhiều hiệu ứng tùy chỉnh, làm nổi bật góc làm việc hoặc chơi game.
Kết nối linh hoạt: Hỗ trợ cả USB-C và không dây Bluetooth 5.0, đảm bảo kết nối ổn định và nhanh chóng.
Vỏ nhôm CNC: Cao cấp, bền bỉ và mang lại cảm giác sang trọng.
Lucky65 V2 là lựa chọn lý tưởng cho những ai yêu thích sự gọn nhẹ mà vẫn đòi hỏi chất lượng và hiệu suất vượt trội.',
                'ndkTrangThai' => 0,
            ],
            [
                'ndkMaSanPham' => 'IP002',
                'ndkTenSanPham' => 'Rainy-75',
                'ndkHinhAnh' => asset('img/san_pham/Rainy75.webp'),
                'ndkSoLuong' => 2,
                'ndkDonGia' => 1899000,
                'ndkMaLoai' => 1,
                'ndkMoTa' => 'Bàn phím cơ Rainy75 là lựa chọn hoàn hảo cho người dùng yêu thích sự cân bằng giữa thiết kế tinh tế và hiệu năng mạnh mẽ.

Đặc điểm nổi bật
Layout 75%: Đầy đủ phím chức năng với thiết kế gọn gàng, tối ưu không gian.
Switch cao cấp: Tuỳ chọn các loại switch nổi tiếng như Gateron, Kailh, hoặc Cherry MX, đảm bảo cảm giác gõ mượt mà và độ bền cao.
Keycap PBT Double-shot: Bền bỉ, không phai màu, mang lại cảm giác gõ thoải mái.
Đèn LED RGB: Hiệu ứng ánh sáng đẹp mắt, dễ dàng tùy chỉnh để phù hợp phong cách cá nhân.
Vỏ nhôm CNC hoặc nhựa ABS cao cấp: Đem lại sự chắc chắn và vẻ ngoài hiện đại.
Kết nối USB-C: Tốc độ phản hồi nhanh và ổn định.
Rainy75 là sự lựa chọn lý tưởng cho cả game thủ lẫn dân văn phòng, kết hợp hoàn hảo giữa tính năng và thẩm mỹ.',
                'ndkTrangThai' => 0,
            ],
            [
                'ndkMaSanPham' => 'SS002',
                'ndkTenSanPham' => 'Star-80',
                'ndkHinhAnh' => asset('img/san_pham/Star80.webp'),
                'ndkSoLuong' => 19,
                'ndkDonGia' => 1750000,
                'ndkMaLoai' => 2,
                'ndkMoTa' => 'Bàn phím cơ Star80 là sự lựa chọn tuyệt vời cho người dùng tìm kiếm sự cân bằng giữa hiệu năng mạnh mẽ và thiết kế tinh tế.

Đặc điểm nổi bật
Layout 80% (TKL): Giữ đầy đủ phím chức năng cần thiết, tiết kiệm không gian nhưng không làm mất đi sự tiện lợi.
Switch cao cấp: Hỗ trợ nhiều loại switch như Gateron, Cherry MX, hoặc Kailh, mang lại cảm giác gõ mượt mà và độ bền lên đến 50 triệu lần nhấn.
Keycap PBT Double-shot: Chống mài mòn, bền bỉ, mang lại trải nghiệm gõ tuyệt vời.
Đèn LED RGB đa vùng: Nhiều hiệu ứng ánh sáng tùy chỉnh, làm nổi bật góc làm việc hoặc chơi game.
Chất liệu cao cấp: Vỏ nhôm CNC hoặc nhựa ABS chất lượng cao, đảm bảo độ bền và thẩm mỹ.
Kết nối USB-C: Đảm bảo tốc độ truyền tín hiệu nhanh và ổn định.
Star80 là lựa chọn hoàn hảo cho cả công việc lẫn giải trí, đáp ứng nhu cầu thẩm mỹ và hiệu năng của người dùng.',
                'ndkTrangThai' => 0,
            ],
            [
                'ndkMaSanPham' => 'HW002',
                'ndkTenSanPham' => 'VMO-Wave75',
                'ndkHinhAnh' => asset('img/san_pham/VMO-Wave75.webp'),
                'ndkSoLuong' => 150,
                'ndkDonGia' => 1990000,
                'ndkMaLoai' => 3,
                'ndkMoTa' => 'Bàn phím cơ Wave75 mang đến sự kết hợp giữa thiết kế hiện đại và hiệu suất mạnh mẽ, phù hợp cho cả công việc và chơi game.

Đặc điểm nổi bật
Layout 75%: Gọn gàng, tiết kiệm không gian nhưng vẫn giữ đầy đủ phím chức năng cần thiết.
Switch hot-swap: Dễ dàng thay thế switch, hỗ trợ đa dạng các loại switch như Gateron, Cherry MX, hoặc Kailh.
Keycap PBT Double-shot: Chống bóng, bền bỉ, mang lại cảm giác gõ thoải mái và chắc chắn.
LED RGB sống động: Hiệu ứng ánh sáng tùy chỉnh, làm nổi bật bàn phím trong mọi môi trường.
Chất liệu cao cấp: Vỏ nhôm CNC hoặc nhựa ABS, kết cấu chắc chắn, mang lại vẻ ngoài sang trọng.
Kết nối linh hoạt: Hỗ trợ USB-C và Bluetooth 5.0, đảm bảo độ ổn định cao và dễ dàng sử dụng.
Wave75 là lựa chọn lý tưởng cho những ai muốn sở hữu một chiếc bàn phím đẹp mắt, bền bỉ và hiệu năng vượt trội.',
                'ndkTrangThai' => 0,
            ],
        ];
        foreach ($products as $product) {
            DB::table('ndk_SAN_PHAM')->insert($product);
        }
    }
}
