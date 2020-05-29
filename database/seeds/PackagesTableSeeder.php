<?php

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            [
                'name' => 'V120',
                'summary' => '<p>Miễn Phí <strong>60Gb</strong> tốc độ cao 3G-4G</p><p>Miễn Phí Gọi VIETTEL dưới <strong>20phút</strong></p><p>Miễn Phí <strong>50phút</strong> gọi ngoại mạng</p>',
                'description' => '<ul><li>Miễn Phí: tất cả các cuộc gọi nội mạng viettel trong nước (áp dụng cho các cuộc gọi dưới <strong>20phút</strong>/1 cuộc gọi)</li><li>Miễn Phí: <strong>50phút</strong> gọi ngoại mạng trong nước</li><li>Miễn Phí: <strong>2Gb</strong>/ngày (tương ứng <strong>60Gb</strong>/tháng)</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động',
                'cost' => '120.000đ/30 ngày',
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'F120U',
                'summary' => '<p>Miễn Phí <strong>7Gb</strong> tốc độ cao 3G-4G</p><p>Miễn Phí Gọi VIETTEL dưới <strong>10phút</strong></p><p>Miễn Phí <strong>40phút</strong> gọi ngoại mạng</p>',
                'description' => '<ul><li>Miễn Phí: tất cả các cuộc gọi nội mạng viettel trong nước (áp dụng cho các cuộc gọi dưới <strong>10phút</strong>/1 cuộc gọi)</li><li>Miễn Phí: <strong>40phút</strong> gọi ngoại mạng trong nước</li><li>Miễn Phí: <strong>7Gb</strong> tốc độ cao (hết tốc độ cao truy cập 512kb/s)</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động & TB chuyển từ trả sau về trả trước.</li></ul>',
                'cost' => '120.000đ/30 ngày',
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'ST200',
                'summary' => '<p>Miễn Phí <strong>60Gb</strong> tốc độ cao 3G-4G</p><p>Miễn Phí Gọi VIETTEL dưới <strong>20phút</strong></p><p>Miễn Phí <strong>200phút</strong> gọi ngoại mạng</p>',
                'description' => '<ul><li>Miễn Phí: tất cả các cuộc gọi nội mạng viettel trong nước (áp dụng cho các cuộc gọi dưới <strong>20phút</strong>/1 cuộc gọi)</li><li>Miễn Phí: <strong>200phút</strong> gọi ngoại mạng trong nước</li><li>Miễn Phí: <strong>2Gb</strong>/ngày (tương ứng 60Gb/tháng)</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động.</li></ul>',
                'cost' => '200.000đ/tháng',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'V120X',
                'summary' => '<p>Miễn Phí <strong>30Gb</strong> tốc độ cao 3G-4G</p><p>Miễn Phí Gọi VIETTEL dưới <strong>20phút</strong></p><p>Miễn Phí <strong>100phút</strong> gọi ngoại mạng</p>',
                'description' => '<ul><li>Miễn Phí: tất cả các cuộc gọi nội mạng viettel trong nước (áp dụng cho các cuộc gọi dưới <strong>20phút</strong>/1 cuộc gọi)</li><li>Miễn Phí: <strong>100phút</strong> gọi ngoại mạng trong nước</li><li>Miễn Phí: <strong>2Gb</strong>/ngày (tương ứng <strong>60Gb</strong>/tháng)</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '120.000đ/tháng',
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'ST120',
                'summary' => '<p>Miễn Phí <strong>90Gb</strong> tốc độ cao 3G-4G</p>',
                'description' => '<ul><li>Miễn Phí: <strong>90Gb</strong> tốc độ cao 3G 4G 5G</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC & TRẢ SAU đang hoạt động</li></ul>',
                'cost' => '120.000đ/ Tháng',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'V90X',
                'summary' => '<p>Miễn Phí 30Gb tốc độ cao 3G-4G</p><p>Miễn Phí Gọi VIETTEL dưới <strong>10phút</strong></p>',
                'description' => '<ul><li>Miễn Phí: tất cả các cuộc gọi nội mạng viettel trong nước (áp dụng cho các cuộc gọi dưới <strong>20phút</strong>/1 cuộc gọi)</li><li>Miễn Phí: <strong>1Gb</strong>/ngày (tương ứng 30Gb/tháng)</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '90.000đ/tháng.',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'F90',
                'summary' => '<p>Miễn Phí <strong>5Gb</strong> tốc độ cao 3G-4G</p><p>Miễn Phí Gọi VIETTEL dưới <strong>10phút</strong></p><p>Miễn Phí <strong>20phút</strong> gọi ngoại mạng</p><p>Miễn Phí <strong>250</strong> tin nhắn VIETTEL</p>',
                'description' => '<ul><li>Miễn Phí: tất cả các cuộc gọi nội mạng viettel trong nước (áp dụng cho các cuộc gọi dưới <strong>10phút</strong>/1 cuộc gọi)</li><li>Miễn Phí: <strong>20phút</strong> gọi ngoại mạng trong nước</li><li>Miễn Phí: <strong>5Gb</strong> tốc độ cao (hết tốc độ cao truy cập 512kb/s)</li><li>Miễn Phí: <strong>250</strong> tin nhắn VIETTEL</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '90.000đ/30 ngày',
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'MIMAX90',
                'summary' => '<p>Miễn Phí <strong>5Gb</strong> tốc độ cao 3G-4G</p>',
                'description' => '<ul><li>Miễn Phí: <strong>5Gb</strong> tốc độ cao 3G 4G 5G(hết tốc độ cao truy cập tốc độ thông thường)</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC & TRẢ SAU đang hoạt động</li></ul>',
                'cost' => '90.000đ/30 ngày',
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'V70X',
                'summary' => '<p>Miễn Phí <strong>15Gb</strong> tốc độ cao 3G-4G</p><p>Miễn Phí Gọi VIETTEL dưới <strong>10phút</strong></p>',
                'description' => '<ul><li>Miễn Phí: tất cả các cuộc gọi nội mạng viettel trong nước (áp dụng cho các cuộc gọi dưới <strong>10phút</strong>/1 cuộc gọi)</li><li>Miễn Phí: <strong>500Mb</strong>/ngày (tương ứng 15Gb/tháng)</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '70.000đ/30 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'ST90',
                'summary' => '<p>Miễn Phí <strong>60Gb</strong> tốc độ cao 3G-4G</p>',
                'description' => '<ul><li>Miễn Phí: <strong>60Gb</strong> tốc độ cao 3G 4G 5G</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC & TRẢ SAU đang hoạt động</li></ul>',
                'cost' => '90.000đ/30 ngày',
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'ST70',
                'summary' => '<p>Miễn Phí <strong>30Gb</strong> tốc độ cao 3G-4G</p>',
                'description' => '<ul><li>Miễn Phí: <strong>30Gb</strong> tốc độ cao 3G 4G 5G</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC & TRẢ SAU đang hoạt động</li></ul>',
                'cost' => '70.000đ/30 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'MIMAX70',
                'summary' => '<p>Miễn Phí <strong>3Gb</strong> tốc độ cao 3G-4G</p>',
                'description' => '<ul><li>Miễn Phí: <strong>3Gb</strong> tốc độ cao 3G 4G 5G(hết tốc độ cao truy cập tốc độ thông thường)</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC & TRẢ SAU đang hoạt động</li></ul>',
                'cost' => '70.000đ/30 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'ST30K',
                'summary' => '<p><span style="color:#14928f"><strong>7GB</strong></span> tốc độ cao</p><p>Sử dụng trong <strong><span style="color:#14928f">7 ngày</span></strong></p>',
                'description' => '<ul><li>Cước phí: 30.000đ/7 ngày.</li><li>Lưu lượng tốc độ cao: 7GB.</li><li>Thời gian sử dụng: 7 ngày kể từ ngày đăng ký.</li><li>Hết lưu lượng ngừng truy cập.</li></ul><p>Với 30.000đ Quý khách sẽ có 7GB lưu lượng tốc độ cao, sử dụng trong 7 ngày kể từ ngày đăng ký. Hết lưu lượng ngừng truy cập.</p>',
                'cost' => '30.000đ/7 ngày',
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'ST15K',
                'summary' => '<p>Miễn Phí <strong>7Gb</strong> tốc độ cao 3G-4G</p>',
                'description' => '<ul><li>Cước phí: 15.000đ/3 ngày.</li><li>Lưu lượng tốc độ cao: 7GB.</li><li>Thời gian sử dụng: 3 ngày kể từ ngày đăng ký.</li><li>Hết lưu lượng ngừng truy cập.</li></ul><p>Với 15.000đ Quý khách sẽ có 3GB lưu lượng tốc độ cao, sử dụng trong 3 ngày kể từ ngày đăng ký. Hết lưu lượng ngừng truy cập.</p>',
                'cost' => '15.000đ/3 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'MIMAXSV',
                'summary' => '<p>Miễn Phí <strong>3Gb</strong> tốc độ cao 3G-4G</p>',
                'description' => '<ul><li>Miễn Phí: <strong>3Gb</strong> tốc độ cao 3G 4G 5G</li><li>Đối tượng áp dụng: TB di động Học Sinh - Sinh Viên (hết tốc độ cao truy cập tốc độ thông thường)</li></ul>',
                'cost' => '50.000đ/30 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'MP90',
                'summary' => '<p>Miễn Phí cuộc gọi VIETTEL</p>',
                'description' => '<ul><li>Miễn Phí: tất cả các cuộc gọi nội mạng viettel trong nước (áp dụng cho các cuộc gọi dưới <strong>20phút</strong>/1 cuộc gọi)</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '90.000đ/30 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'MP70',
                'summary' => '<p>Miễn Phí cuộc gọi VIETTEL</p>',
                'description' => '<ul><li>Miễn Phí: tất cả các cuộc gọi nội mạng viettel trong nước (áp dụng cho các cuộc gọi dưới <strong>20phút</strong>/1 cuộc gọi)</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '70.000đ/30 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'MP50',
                'summary' => '<p>Miễn Phí cuộc gọi VIETTEL</p>',
                'description' => '<ul><li>Miễn Phí: tất cả các cuộc gọi nội mạng viettel trong nước (áp dụng cho các cuộc gọi dưới <strong>20phút</strong>/1 cuộc gọi)</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '50.000đ/30 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'DK50',
                'summary' => '<p>Miễn Phí <strong>500phút</strong> gọi VIETTEL</p>',
                'description' => '<ul><li>Miễn Phí: <strong>500phút</strong> các cuộc gọi nội mạng viettel trong nước</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '50.000đ/30ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'ECOD50',
                'summary' => '<p>Miễn Phí <strong>3Gb</strong> tốc độ cao 3G-4G</p>',
                'description' => '<ul><li>Miễn Phí: <strong>3Gb</strong> tốc độ cao 3G 4G 5G</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC & TRẢ SAU đang hoạt động</li></ul>',
                'cost' => '50.000đ/30 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => '6V120',
                'summary' => '<p>Miễn Phí <strong>360Gb</strong> tốc độ cao 3G-4G</p><p>Miễn Phí Gọi VIETTEL dưới <strong>20phút</strong></p><p>Miễn Phí <strong>300phút</strong> gọi ngoại mạng</p>',
                'description' => '<ul><li>Miễn Phí: tất cả các cuộc gọi nội mạng viettel trong nước (áp dụng cho các cuộc gọi dưới <strong>20phút</strong>/1 cuộc gọi)</li><li>Miễn Phí: <strong>300phút</strong> gọi ngoại mạng trong nước</li><li>Miễn Phí: <strong>360Gb</strong>/180ngày (tương ứng 2Gb/ngày)</li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '720.000đ/180 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => '12V120',
                'summary' => '<p>Miễn Phí <strong>720Gb</strong> tốc độ cao 3G-4G</p><p>Miễn Phí Gọi VIETTEL dưới <strong>20phút</strong></p><p>Miễn Phí <strong>600phút</strong> gọi ngoại mạng</p>',
                'description' => '<ul><li>Miễn Phí: tất cả các cuộc gọi nội mạng viettel trong nước (áp dụng cho các cuộc gọi dưới <strong>20phút</strong>/1 cuộc gọi)</li><li>Miễn Phí: <strong>600phút</strong> gọi ngoại mạng trong nước</li><li>Miễn Phí: <strong>720Gb</strong>/360ngày (tương ứng 2Gb/ngày)</li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '1.440.000đ/360 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'D70',
                'summary' => '<p>Miễn Phí <strong>7Gb</strong> tốc độ cao 3G-4G</p><p>Áp dụng sim Dcom</p>',
                'description' => '<ul><li>Miễn Phí: <strong>7Gb</strong> tốc độ cao 3G 4G 5G</li><li>Hết tốc độ cao truy cập tốc độ thông thường</li><li>Đối tượng áp dụng: TB Dcom đang hoạt động</li></ul>',
                'cost' => '70.000đ/30 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'D90',
                'summary' => '<p>Miễn Phí <strong>10Gb</strong> tốc độ cao 3G-4G</p><p>Áp dụng sim Dcom</p>',
                'description' => '<ul><li>Miễn Phí: <strong>10Gb</strong> tốc độ cao 3G 4G 5G</li><li>Hết tốc độ cao truy cập tốc độ thông thường</li><li>Đối tượng áp dụng: TB Dcom đang hoạt động</li></ul>',
                'cost' => '90.000đ/30 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'D120',
                'summary' => '<p>Miễn Phí <strong>12Gb</strong> tốc độ cao 3G-4G</p><p>Áp dụng sim Dcom</p>',
                'description' => '<ul><li>Miễn Phí: <strong>12Gb</strong> tốc độ cao 3G 4G 5G</li><li>Hết tốc độ cao truy cập tốc độ thông thường</li><li>Đối tượng áp dụng: TB Dcom đang hoạt động</li></ul>',
                'cost' => '120.000đ/tháng',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'D500',
                'summary' => '<p>Miễn Phí <strong>60Gb</strong> tốc độ cao 3G-4G</p><p>Áp dụng sim Dcom</p>',
                'description' => '<ul><li>Miễn Phí: <strong>60Gb</strong> tốc độ cao 3G 4G 5G</li><li>Hết tốc độ cao truy cập tốc độ thông thường</li><li>Đối tượng áp dụng: TB Dcom đang hoạt động</li></ul>',
                'cost' => '500.000đ/360ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'D900',
                'summary' => '<p>Miễn Phí <strong>90Gb</strong> tốc độ cao 3G-4G</p><p>Áp dụng sim Dcom</p>',
                'description' => '<ul><li>Miễn Phí: <strong>90Gb</strong> tốc độ cao 3G 4G 5G</li><li>Hết tốc độ cao truy cập tốc độ thông thường</li><li>Đối tượng áp dụng: TB Dcom đang hoạt động</li></ul>',
                'cost' => '900.000đ/360 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'UMAX300',
                'summary' => '<p>Miễn Phí <strong>30Gb</strong> tốc độ cao 3G-4G</p><p>hết tốc độ cao truy cập 1Mb/s</p>',
                'description' => '<ul><li>Miễn Phí: <strong>30Gb</strong> tốc độ cao 3G 4G 5G</li><li>Hết tốc độ cao truy cập tốc độ 1Mb/s</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC & TRẢ SAU đang hoạt động</li></ul>',
                'cost' => '300.000đ/30 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'MIMAX200',
                'summary' => '<p>Miễn Phí <strong>15Gb</strong> tốc độ cao 3G-4G</p><p>hết tốc độ cao truy cập 1Mb/s</p>',
                'description' => '<ul><li>Miễn Phí: <strong>15Gb</strong> tốc độ cao 3G 4G 5G</li><li>Hết tốc độ cao truy cập tốc độ 1Mb/s</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC & TRẢ SAU đang hoạt động</li></ul>',
                'cost' => '200.000đ/30 ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'TOMD30',
                'summary' => '<p>Miễn Phí <strong>1Gb</strong> tốc độ cao 3G-4G</p>',
                'description' => '<ul><li>Miễn Phí: <strong>1Gb</strong> tốc độ cao 3G 4G 5G</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC & TRẢ SAU đang hoạt động</li></ul>',
                'cost' => '30.000đ/30ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'V50K',
                'summary' => '<p>Miễn Phí 7Gb tốc độ cao 3G-4G</p><p>Miễn Phí Gọi VIETTEL dưới <strong>20phút</strong></p>',
                'description' => '<ul><li>Miễn Phí: tất cả các cuộc gọi nội mạng viettel trong nước (áp dụng cho các cuộc gọi dưới <strong>20phút</strong>/1 cuộc gọi)</li><li>Miễn Phí: <strong>7Gb</strong>/7ngày</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '50.000đ/7ngày',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'EST30',
                'summary' => '<p>Miễn Phí <strong>7Gb</strong> tốc độ cao 3G-4G</p><p>Miễn Phí xem livestream chơi game liên quân mobile</p>',
                'description' => '<ul><li>Miễn Phí: <strong>7Gb</strong> tốc độ cao 3G 4G 5G</li><li>Miễn Phí xem livestream chơi game liên quân mobile</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC & TRẢ SAU đang hoạt động</li></ul>',
                'cost' => '30.000đ/tháng',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'EST120',
                'summary' => '<p>Miễn Phí <strong>30Gb</strong> tốc độ cao 3G-4G</p><p>Miễn Phí xem livestream chơi game liên quân mobile</p>',
                'description' => '<ul><li>Miễn Phí: <strong>30Gb</strong> tốc độ cao 3G 4G 5G</li><li>Miễn Phí xem livestream chơi game liên quân mobile</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC & TRẢ SAU đang hoạt động</li></ul>',
                'cost' => '120.000đ/tháng',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'KM99',
                'summary' => '<p>Miễn Phí <strong>500</strong>phút gọi VIETTEL</p>',
                'description' => '<ul><li>Miễn Phí: <strong>500phút</strong> các cuộc gọi nội mạng viettel trong nước</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '99.000đ/tháng',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'KM119',
                'summary' => '<p>Miễn Phí <strong>750</strong>phút gọi VIETTEL</p>',
                'description' => '<ul><li>Miễn Phí: <strong>750</strong>phút các cuộc gọi nội mạng viettel trong nước</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '119.000đ/tháng',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'ST150',
                'summary' => '<p>Miễn Phí <strong>30Gb</strong> tốc độ cao 3G-4G</p><p>Miễn Phí Gọi VIETTEL dưới <strong>20phút</strong></p>',
                'description' => '<ul><li>Miễn Phí: tất cả các cuộc gọi nội mạng viettel trong nước (áp dụng cho các cuộc gọi dưới <strong>20phút</strong>/1 cuộc gọi)</li><li>Miễn Phí: <strong>30Gb</strong>/tháng</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '150.000đ/tháng',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'V150X',
                'summary' => '<p>Miễn Phí <strong>45Gb</strong> tốc độ cao 3G-4G</p><p>Miễn Phí Gọi VIETTEL dưới <strong>20phút</strong></p>Miễn Phí <strong>100phút</strong> gọi ngoại mạng</p>',
                'description' => '<ul><li>Miễn Phí: tất cả các cuộc gọi nội mạng viettel trong nước (áp dụng cho các cuộc gọi dưới <strong>20phút</strong>/1 cuộc gọi)</li><li>Miễn Phí: <strong>100phút</strong> gọi ngoại mạng trong nước</li><li>Miễn Phí: <strong>1,5Gb</strong>/ngày (tương ứng <strong>45Gb</strong>/tháng)</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '150.000đ/tháng',
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'T80K',
                'summary' => '<p>Miễn Phí <strong>500phút</strong> gọi VIETTEL</p><p>Miễn Phí <strong>500</strong> tin nhắn nội mạng</p>',
                'description' => '<ul><li>Miễn Phí: <strong>500phút</strong> các cuộc gọi nội mạng viettel trong nước</li><li>Miễn Phí <strong>500</strong> tin nhắn nội mạng</li><li>Đối tượng áp dụng: TB di động TRẢ TRƯỚC đang hoạt động</li></ul>',
                'cost' => '80.000đ/tháng',
                'type' => 0,
                'count' => 0
            ],
        ];

        $groups = [
            1 => ['V120', 'F120U', 'ST200', 'V120X', 'V90X', 'F90', 'V70X', 'MIMAX70', 'ST150', 'V150X'],
            2 => ['MP90', 'MP70', 'MP50', 'DK50', 'KM99', 'KM119', 'T80K'],
            3 => ['ST120', 'MIMAX90', 'ST90', 'ST70', 'MIMAXSV', 'ECOD50', 'EST30', 'EST120', 'UMAX300', 'MIMAX200', 'TOMD30'],
            4 => ['D70', 'D90', 'D120'],
            5 => ['ST30K', 'ST15K', 'V50K'],
            6 => ['6V120', '12V120', 'D500', 'D900']
        ];


        foreach ($packages as $package) {
            Package::query()->create($package);
        }

        $categories = \App\Models\Category::all();

        foreach ($categories as $category) {
            $packages = Package::query()->whereIn('name', $groups[$category->id])->get();
            foreach ($packages as $package) {
                $category->packages()->attach($package->id);
            }
        }
    }
}
