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
        $pakages = [
            [
                'name' => 'V120',
                'summary' => '<p><span style="color:#14928f"><strong>60GB</strong></span> tốc độ cao (2Gb/ Ngày)<br><span style="color:#14928f"><strong>Miễn phí</strong></span> cuộc gọi nội mạng <span style="color:#14928f"><strong>dưới 20 phút</strong></span><br>Có <span style="color:#14928f"><strong>50 phút</strong></span> gọi ngoại mạng trong nước</p><p><strong>(THAY GÓI&nbsp;V90&nbsp;TỪ 25/2/2020)</strong></p>',
                'description' => '<ul><li>Miễn phí tất cả cuộc gọi nội mạng Viettel trong nước (chỉ áp dụng cho các cuộc gọi dưới 20 phút)</li><li>Tặng ngay 50 phút gọi ngoại mạng trong nước</li><li>2GB data/ngày (tương đương 60GB data/tháng)</li><li>Đối tượng áp dụng: thuê bao di động trả trước đang hoạt động</li></ul><p>Hiện tại Viettel đã tạm <span style="color:#d33c43"><strong>dừng đăng ký gói cước V90</strong></span>. Gói cước V120 sẽ được thay thế với những ưu đãi được nâng cao so với V90. Hãy nhấn nút để đăng ký ngay gói cước mới</p>',
                'cost' => '120.000đ/30 ngày',
                'category_id' => 6,
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'V120X',
                'summary' => '<p><strong><span style="color:#14928f">Miễn phí&nbsp;</span>30GB</strong>&nbsp;tốc độ cao (1Gb/ Ngày)</p><p><span style="color:#14928f"><strong>Miễn phí</strong></span>&nbsp;cuộc gọi nội mạng&nbsp;<span style="color:#14928f"><strong>dưới 20 phút</strong></span></p><p><strong><span style="color:#14928f">Miễn phí </span>100 phút</strong> gọi ngoại mạng</p>',
                'description' => '<ul><li>Miễn phí tất cả cuộc gọi nội mạng Viettel trong nước (chỉ áp dụng cho các cuộc gọi dưới 20 phút)</li><li>Tặng ngay 100 phút gọi ngoại mạng trong nước</li><li>1GB data/ngày (tương đương 30GB data/tháng)</li><li>Đối tượng áp dụng: thuê bao di động trả trước đang hoạt động</li></ul>',
                'cost' => '120.000đ/tháng',
                'category_id' => 3,
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'ST200',
                'summary' => '<p><span style="color:#14928f"><strong>Miễn phí</strong></span>&nbsp;gọi nội mạng <span style="color:#14928f">dưới <strong>20 phút/cuộc</strong></span></p><p><strong><span style="color:#14928f">Miễn phí 60GB</span> </strong>(2Gb/ngày)</p><p><span style="color:#14928f"><strong>Miễn phí 200 phút</strong> </span>gọi ngoại mạng</p>',
                'description' => '<p>Miễn phí cuộc gọi nội mạng Viettel dưới 20 phút/cuộc Miễn phí 60GB (2Gb/ngày) Miễn phí 200 phút gọi ngoại mạng</p>',
                'cost' => '200.000đ/tháng',
                'category_id' => 6,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'V200X',
                'summary' => '<p><strong><span style="color:#14928f">Miễn phí </span>60GB</strong>&nbsp;tốc độ cao (2Gb/ Ngày)</p><p><span style="color:#14928f"><strong>Miễn phí</strong></span>&nbsp;cuộc gọi nội mạng&nbsp;<span style="color:#14928f"><strong>dưới 20 phút</strong></span></p><p><span style="color:#14928f"><strong>Miễn phí</strong></span>&nbsp;<strong>200 phút</strong>&nbsp;gọi ngoại mạng trong nước</p>',
                'description' => '<p>Cước phí 200.000đ/tháng</p>',
                'cost' => '200.000đ/tháng',
                'category_id' => 3,
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'ST90',
                'summary' => '<p><span style="color:#14928f"><strong>Miễn Phí </strong></span><strong>30GB/ </strong>tháng -&nbsp;Tốc độ cao</p><p><strong><span style="color:#14928f">1GB</span></strong> tốc độ cao/ngày</p><p>Hết 1GB ngừng truy cập</p>',
                'description' => '<p><em>(Đối với thuê bao trả sau: Đăng ký gói từ ngày 21 đến cuối tháng, phí gói còn 45.000đ/tháng và giữ nguyên 2GB/ngày)</em></p><p><strong>Ưu đãi:</strong><br>- Có 1GB tốc độ cao/ngày, hết 1GB ngừng truy cập.&nbsp;<em>(Áp dụng từ ngày 05/03/2020)</em><br>- Gói cước gia hạn khi hết 30 ngày với trả trước hoặc hết tháng với trả sau.</p><p><strong>Đối tượng áp dụng:&nbsp;</strong>Thuê bao di động trả trước và trả sau theo danh sách.</p>',
                'cost' => '90.000đ/30 ngày',
                'category_id' => 6,
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'MIMAX90',
                'summary' => '<p><span style="color:#14928f"><strong>5GB</strong></span> tốc độ cao</p><p><strong><span style="color:#14928f">Tặng 3GB</span></strong> sử dụng ứng dụng ONME</p><p>Hết 5GB truy cập<strong><span style="color:#14928f"> </span></strong>với tốc độ thông thường</p>',
                'description' => '<ul><li>Lưu lượng tốc độ cao: 5GB.</li><li>Thời gian sử dụng: 30 ngày.</li><li>Cước phí vượt gói: Hoàn toàn miễn phí.</li></ul><p>Với 90.000đ Quý khách sẽ có 5GB lưu lượng tốc độ cao, sử dụng trong 30 ngày (đối với TB trả trước) hoặc theo chu kỳ tháng (đối với TB trả sau). Hết 5GB truy cập không giới hạn với tốc độ thông thường.</p><p>Gói cước gia hạn khi hết chu kỳ.&nbsp;<em>(Đối với thuê bao trả sau: Đăng ký gói từ ngày 21 đến cuối tháng sẽ giảm 50% phí gói và có 50% lưu lượng)</em></p>',
                'cost' => '90.000đ/30 ngày',
                'category_id' => 6,
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'MIMAX70',
                'summary' => '<p><span style="color:#14928f"><strong>3GB</strong></span> tốc độ cao</p><p><span style="color:#14928f"><strong>Tặng 3GB</strong></span>&nbsp;sử dụng ứng dụng ONME</p><p>Hết 3GB truy cập với tốc độ thông thường</p>',
                'description' => '<ul><li>Lưu lượng tốc độ cao: 3GB.</li><li>Thời gian sử dụng: 30 ngày.</li><li>Cước phí vượt gói: Hoàn toàn miễn phí.</li></ul><p>Với 70.000đ Quý khách sẽ có 3GB lưu lượng tốc độ cao, sử dụng trong 30 ngày (đối với TB trả trước) hoặc theo chu kỳ tháng (đối với TB trả sau). Hết 3GB truy cập không giới hạn với tốc độ thông thường.</p><p>Đối với thuê bao trả sau: Đăng ký gói từ ngày 21 đến cuối tháng sẽ giảm 50% phí gói và có 50% lưu lượng.</p>',
                'cost' => '70.000đ/30 ngày',
                'category_id' => 2,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'EST120',
                'summary' => '<p><span style="color:#ff0000"><strong>Miễn phí</strong>&nbsp;</span><span style="color:#14928f"><strong>28GB</strong></span>&nbsp;tốc độ cao (1GB/ngày), hết dừng truy cập</p><p><span style="color:#ff0000"><strong>Miễn phí&nbsp;</strong></span>Data khi chơi hoặc xem livestream game trên ứng dựng Liên quân Mobile</p>',
                'description' => '<ul><li>Cước phí: 120.000đ/lần đăng ký.</li><li>Lưu lượng tốc độ cao: 28 GB.</li><li>01 GB / Ngày</li><li>Thời gian sử dụng: đến hết 28 GB.</li><li>Hết lưu lượng ngừng truy cập.</li></ul><p>Với 120.000đ Quý khách sẽ có 28 GB lưu lượng tốc độ cao để sử dụng. Hết 28 GB lưu lượng ngừng truy cập.</p><p>Đăng ký: ETS120<strong>&nbsp;0987498520</strong> gửi <strong>9123</strong></p>',
                'cost' => '120.000đ /28 ngày',
                'category_id' => 1,
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'ECOD50',
                'summary' => '<p><span style="color:#14928f"><strong>3GB</strong> </span>tốc độ cao</p><p>Hết 3GB&nbsp;dừng truy cập</p><p>Áp&nbsp;dụng&nbsp;cho thuê bao theo danh sách</p>',
                'description' => '<ul><li>3GB tốc độ cao</li><li>Hết 3GB&nbsp;dừng truy cập</li></ul><p>Với 50.000đ bạn có ngay 3GB lưu lượng tốc độ cao, sử dụng trong 30 ngày (đối với Thuê bao trả trước) hoặc hết tháng (đối với Thuê bao trả sau).</p><p><strong>Đối tượng áp dụng:&nbsp;</strong>Thuê bao di động theo danh sách.</p>',
                'cost' => '50.000đ/Lần đăng ký',
                'category_id' => 1,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'ST120',
                'summary' => '<p><strong><span style="color:#14928f">Có Ngay</span> 90GB</strong> tốc độ cao <span style="color:#14928f">(<strong>3Gb/ ngày</strong>)</span><br>Thời gian sử dụng: <span style="color:#e47a26">30 ngày</span></p>',
                'description' => '<ul><li>Cước phí: 120.000đ/ tháng</li><li>Miễn phí 90 GB tốc độ cao</li><li>Gói cước tự động gia hạn khi hết chu kỳ</li></ul>',
                'cost' => '120.000đ/ Tháng',
                'category_id' => 1,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'MIMAX125',
                'summary' => '<p><span style="color:#14928f"><strong>8GB</strong></span> tốc độ cao</p><p><strong><span style="color:#14928f">Tặng&nbsp;3GB</span>&nbsp;</strong>sử dụng ứng dụng ONME</p><p>Hết 8GB truy cập tốc độ thông thường</p>',
                'description' => '<li>8GB lưu lượng tốc độ cao/tháng</li><li>Tặng 3GB sử dụng ứng dụng ONME theo chu kỳ gói data</li></ul><p>Với 125.000đ Quý khách sẽ có 8GB lưu lượng tốc độ cao, sử dụng trong 30 ngày (đối với TB trả trước) hoặc theo chu kỳ tháng (đối với TB trả sau).</p><p>Gói cước gia hạn khi hết chu kỳ.&nbsp;<em>(Đối với thuê bao trả sau: Đăng ký gói từ ngày 21 đến cuối tháng sẽ giảm 50% phí gói và có 50% lưu lượng)</em></p>',
                'cost' => '125.000đ/30 ngày',
                'category_id' => 1,
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'V150X',
                'summary' => '<p><strong><span style="color:#14928f">Miễn Phí</span> 45GB</strong>&nbsp;tốc độ cao <span style="color:#14928f"><strong>(1,5Gb/ Ngày)</strong></span><br><span style="color:#14928f"><strong>Miễn phí</strong></span>&nbsp;cuộc gọi nội mạng&nbsp;<strong>dưới 20 phút</strong><br><span style="color:#14928f"><strong>Miễn phí</strong></span>&nbsp;<strong>100 phút</strong>&nbsp;gọi ngoại mạng trong nước</p>',
                'description' => '<ul><li>Miễn phí tất cả cuộc gọi nội mạng Viettel trong nước (chỉ áp dụng cho các cuộc gọi dưới 20 phút)</li><li>Tặng ngay 100 phút gọi ngoại mạng trong nước</li><li>1,5GB data/ngày (tương đương 45GB data/tháng)</li><li>Đối tượng áp dụng: thuê bao di động trả trước đang hoạt động</li><li>Cước phí:&nbsp;150.000đ/30 ngày</li></ul>',
                'cost' => '150.000đ/tháng.',
                'category_id' => 3,
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'B150K',
                'summary' => '<p><strong><span style="color:#14928f">500 phút</span></strong> gọi Viettel</p><p><strong><span style="color:#14928f">1.5GB lưu lượng</span></strong> data tốc độ cao</p><p>Có yêu cầu điều kiện để đăng ký</p>',
                'description' => '<p><strong>Ưu đãi:</strong></p><ul><li>500 phút gọi nội mạng</li><li>500 SMS nội mạng</li><li>1,5GB lưu lượng data tốc độ cao (hết tốc độ cao miễn phí tốc độ thường) sử dụng trong 30 ngày</li><li>CTKM phù hợp với các thuê bao thường xuyên sử dụng gọi thoại, truy cập&nbsp;<strong>3G/4G Viettel</strong>&nbsp;và nhận được tin nhắn từ nhà mạng Viettel</li></ul><p><strong>Đối tượng áp dụng:&nbsp;</strong>Thuê bao di động trả trước của Viettel, thỏa mãn đồng thời 2 điều kiện:</p><p><strong>(1)&nbsp;&nbsp;&nbsp;</strong>Thuê bao di động trả trước kích hoạt mới, thuê bao chuyển từ trả sau sang trả trước từ ngày 01/11/2016.</p><p><strong>(2)&nbsp;&nbsp;&nbsp;</strong>Thuộc danh sách tham gia</p>',
                'cost' => '150.000đ/30 ngày',
                'category_id' => 3,
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'D90',
                'summary' => '<p><span style="color:#14928f"><strong>10GB</strong></span> tốc độ cao</p><p>Hết 10GB truy cập tốc độ thông thường</p>',
                'description' => '<p>Cước thuê bao: 90.000đ/30 ngày</p><p>Miễn phí 10GB lưu lượng Data/30 ngày.</p><p>Hết 10GB truy cập tốc độ thông thường.</p>',
                'cost' => '90.000đ/30 ngày',
                'category_id' => 6,
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'F90',
                'summary' => '<p><span style="color:#14928f"><strong>5GB</strong></span> tốc độ cao</p><p><span style="color:#14928f"><strong>Miễn phí</strong></span> cuộc gọi nội mạng <span style="color:#14928f"><strong>dưới 10 phút</strong></span></p><p><strong><span style="color:#14928f">15 phút </span></strong>gọi ngoại mạng</p>',
                'description' => '<ul><li>Miễn phí cuộc gọi nội mạng dưới 10 phút</li><li>15 Phút gọi ngoại mạng</li><li>250 tin nhắn nội mạng</li><li>5GB data hết lưu lượng dừng truy cập</li></ul><p><strong>Điều kiện đăng ký gói F90 Viettel</strong></p><ul><li>Thuê bao di động Viettel kích hoạt mới trong khoảng thời gian từ sau ngày 15/11/2018 sẽ được tham gia gói F90 hoặc thuê bao nằm trong danh sách được Viettel gửi tin nhắn mời tham gia đăng ký gói cước F90</li><li>Thuê bao đang hoạt động 2 chiều tại thời điểm đăng ký.</li><li>Tài khoản gốc của thuê bao còn đủ 90.000đ.</li></ul>',
                'cost' => '90.000đ/30 ngày',
                'category_id' => 6,
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'MIMAX200',
                'summary' => '<p><span style="color:#14928f"><strong>15GB</strong> </span>tốc độ cao</p><p><strong><span style="color:#14928f">Tặng 3GB</span>&nbsp;</strong>sử dụng ứng dụng ONME</p><p>Hết 15GB truy cập với tốc độ thông thường</p>',
                'description' => '<ul><li>15GB lưu lượng tốc độ cao</li><li>Tặng 3GB sử dụng ứng dụng ONME theo chu kỳ gói data</li></ul><p>+&nbsp;<strong>15GB</strong>&nbsp;lưu lượng tốc độ cao, sử dụng trong 30 ngày (đối với Thuê bao trả trước) hoặc hết tháng (đối với Thuê bao trả sau). Hết 15GB truy cập không giới hạn với tốc độ thông thường. Gói cước gia hạn khi hết chu kỳ.&nbsp;<em>(Đối với thuê bao trả sau: Đăng ký gói từ ngày 21 đến cuối tháng sẽ giảm 50% phí gói và có 50% lưu lượng)</em></p><p>+&nbsp;<strong>Tặng 3GB&nbsp;</strong>sử dụng ứng dụng ONME theo chu kỳ gói data, sau khi khách hàng đăng ký/gia hạn/khôi phục thành công (Hệ thống có nhắn tin thông báo khi cộng ưu đãi thành công và khi thuê bao sử dụng hết 3GB lưu lượng).</p>',
                'cost' => '200.000đ/30 ngày',
                'category_id' => 1,
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'ST30K',
                'summary' => '<p><span style="color:#14928f"><strong>7GB</strong></span> tốc độ cao</p><p>Sử dụng trong <strong><span style="color:#14928f">7 ngày</span></strong></p>',
                'description' => '<ul><li>Cước phí: 30.000đ/7 ngày.</li><li>Lưu lượng tốc độ cao: 7GB.</li><li>Thời gian sử dụng: 7 ngày kể từ ngày đăng ký.</li><li>Hết lưu lượng ngừng truy cập.</li></ul><p>Với 30.000đ Quý khách sẽ có 7GB lưu lượng tốc độ cao, sử dụng trong 7 ngày kể từ ngày đăng ký. Hết lưu lượng ngừng truy cập.</p>',
                'cost' => '30.000đ/7 ngày',
                'category_id' => 4,
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'UMAX300',
                'summary' => '<p><span style="color:#16a085"><strong>Không giới hạn</strong></span> tốc độ cao</p><p>Hết 30GB đầu, tốc độ cao giới hạn về<strong><span style="color:#14928f"> 1Mbps</span></strong></p><p><strong><span style="color:#14928f">Tặng 3GB </span></strong>sử dụng ứng dụng ONME</p>',
                'description' => '<p>(Ưu đãi dành cho HS/SV là 280.000đ)</p><ul><li>Truy cập Internet không giới hạn lưu lượng tốc độ cao, sử dụng trong 30 ngày (đối với thuê bao trả trước) hoặc hết tháng (đối với thuê bao trả sau). Hết 30GB đầu, tốc độ cao giới hạn về 1Mbps (vẫn thoải mái xem phim, nghe nhạc, lướt Internet, đọc báo). Gói cước gia hạn khi hết chu kỳ.</li><li>Tặng 3GB sử dụng ứng dụng ONME theo chu kỳ gói data, sau khi khách hàng đăng ký/gia hạn/khôi phục thành công (Hệ thống có nhắn tin thông báo khi cộng ưu đãi thành công và khi thuê bao sử dụng hết 3GB lưu lượng).</li><li>Lưu ý: Gói cước Umax300 chỉ áp dụng cho TB là học sinh sinh viên kích hoạt/ hòa mạng trước ngày 15/11/2018 và được giảm giá 20.000/tháng so với thuê bao thường.</li></ul>',
                'cost' => '300.000đ/30 ngày',
                'category_id' => 1,
                'type' => 1,
                'count' => 0
            ],
            [
                'name' => 'V90',
                'summary' => '<p><strong>60GB</strong> tốc độ cao<br><strong>Miễn phí</strong> cuộc gọi nội mạng <strong>dưới 20 phút</strong></p>',
                'description' => '<ul><li>Cước phí: 90.000đ/tháng.</li><li>Miễn phí tất cả cuộc gọi nội mạng Viettel trong nước (chỉ áp dụng cho các cuộc gọi dưới 20 phút)</li><li>Tặng ngay 50 phút gọi ngoại mạng trong nước</li><li>2GB data/ngày (tương đương 60GB data/tháng)</li><li>Đối tượng áp dụng: thuê bao di động trả trước hòa mạng mới bắt đầu từ ngày 2/5/2018</li></ul>',
                'cost' => '90.000đ/30 ngày',
                'category_id' => 1,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'MIMAX450',
                'summary' => '<p><strong><span style="color:#14928f">5Gb</span> </strong>tốc độ cao/tháng</p><p>Tổng<span style="color:#14928f"><strong>&nbsp;30GB</strong> </span>tốc độ cao/6 tháng</p><p>Chu kỳ&nbsp;<span style="color:#14928f"><strong>180 ngày</strong></span></p>',
                'description' => '<ul><li>Giá cước: 450.000đ/6 tháng</li><li>30GB tốc độ cao (5GB/tháng)</li></ul><p>Gói cước áp dụng được cho cả thuê bao trả trước và trả sau.</p><p>Sau khi sử dụng tới giới hạn&nbsp;<em><strong>5Gb/tháng</strong></em>, bạn vẫn có thể sử dụng tiếp Internet với tốc độ thường mà không phát sinh cước phí</p>',
                'cost' => '450.000đ/6 tháng',
                'category_id' => 1,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'V79',
                'summary' => '<p><strong>30 phút</strong> ngoại mạng<br><strong>30 SMS</strong> nội mạng<br><strong>1.500 phút</strong> nội mạng</p>',
                'description' => '<ul><li>Cước phí: 79.000đ/tháng.</li><li>30 phút ngoại mạng</li><li>30 SMS nội mạng</li><li>1.500 phút nội mạng</li></ul><p>Cước phí đăng ký là 79.000đ. Ngay sau khi đăng ký nếu tài khoản chính của bạn còn đủ 79k sẽ có thông báo đăng ký thành công bằng tin nhắn từ nhà mạng.</p>',
                'cost' => '79.000đ/30 ngày',
                'category_id' => 3,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'V90K',
                'summary' => '<p><strong>1GB+300 phút</strong> nội mạng</p>',
                'description' => '><p>Cước phí 90.000đ/tháng</p>',
                'cost' => '90.000đ/tháng',
                'category_id' => 3,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'T70K',
                'summary' => '<p><span style="color:#14928f"><strong>500</strong> <strong>phút</strong></span><strong> </strong>gọi Viettel</p><p><strong><span style="color:#14928f">150 SMS</span></strong> nội mạng</p><p>Áp dụng thuê bao trả trước trong danh sách</p>',
                'description' => '<p><strong>Ưu đãi:</strong><br>- 500 phút gọi nội mạng<br>- 150 SMS nội mạng<br>- Chu kỳ sử dụng 30 ngày kể từ thời điểm đăng ký thành công<br>- Hệ thống gia hạn tự động<br>- Khi sử dụng hết số lượng phút gọi, tin nhắn khuyến mãi của Viettel miễn phí của gói thì cước phí sẽ là cước phí mặc định theo quy định của nhà mạng hiện hành.<br><strong>Đối tượng áp dụng:&nbsp;</strong>Thuê bao di động trả trước nằm trong danh sách.</p>',
                'cost' => '70.000đ/30 ngày',
                'category_id' => 3,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'T80K',
                'summary' => '<p><span style="color:#14928f"><strong>500 phút</strong>&nbsp;</span>gọi nội mạng</p><p><strong><span style="color:#14928f">500SMS</span> </strong>nội mạng</p><p>Áp dụng thuê bao trả trước trong danh sách</p>',
                'description' => '<p><strong>Ưu đãi:</strong><br>- 500 phút gọi nội mạng<br>- 500 SMS nội mạng<br>- Chu kỳ sử dụng 30 ngày kể từ thời điểm đăng ký thành công<br>- Khi sử dụng hết số lượng phút gọi, tin nhắn khuyến mãi của Viettel miễn phí của gói thì cước phí sẽ là cước phí mặc định theo quy định của nhà mạng hiện hành.<br><strong>Đối tượng áp dụng:</strong>&nbsp;Thuê bao di động trả trước nằm trong danh sách.</p>',
                'cost' => '80.000đồng/tháng',
                'category_id' => 3,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'B100K',
                'summary' => '<p><strong><span style="color:#14928f">500 phút</span></strong> gọi Viettel</p><p><span style="color:#14928f"><strong>600MB</strong> </span>lưu lượng data tốc độ cao</p><p>Có yêu cầu điều kiện để đăng ký</p>',
                'description' => '<p><strong>Ưu đãi:</strong></p><p>+ 500 phút gọi nội mạng</p><p>+ 600MB lưu lượng data tốc độ cao (hết tốc độ cao miễn phí tốc độ thường) sử dụng trong 30 ngày.</p><p><strong>Đối tượng áp dụng:&nbsp;</strong>Thuê bao di động trả trước của Viettel,&nbsp;<strong>thỏa mãn đồng thời 2 điều kiện:</strong></p><p><strong>(1)&nbsp;&nbsp;&nbsp;</strong>Thuê bao di động trả trước kích hoạt mới, thuê bao chuyển từ trả sau sang trả trước từ ngày 01/11/2016.</p><p><strong>(2)&nbsp;&nbsp;&nbsp;</strong>Thuộc danh sách tham gia sử dụng dịch vụ</p>',
                'cost' => '100.000đ/30 ngày',
                'category_id' => 3,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => '3F90',
                'summary' => '<p><span style="color:#14928f"><strong>5GB/tháng</strong></span> tốc độ cao</p><p><span style="color:#14928f"><strong>Miễn phí</strong> </span>cuộc gọi nội mạng <span style="color:#14928f"><strong>dưới 10 phút</strong></span></p><p><span style="color:#14928f"><strong>15 phút</strong></span> gọi ngoại mạng/tháng</p>',
                'description' => '<ul><li>Chu kỳ: 3 tháng/lần đăng ký</li><li>Miễn phí cuộc gọi nội mạng <strong>dưới 10 phút</strong></li><li><strong>15 phút</strong> gọi ngoại mạng/tháng</li><li><strong>250 tin nhắn</strong> nội mạng/tháng</li><li><strong>5GB data</strong>/tháng hết lưu lượng dừng truy cập</li></ul><p><strong>Điều kiện đăng ký gói 3F90 Viettel</strong></p><ul><li>Thuê bao di động Viettel kích hoạt mới trong khoảng thời gian từ sau ngày 15/11/2018</li><li>Thuê bao đang hoạt động 2 chiều tại thời điểm đăng ký.</li><li>Tài khoản gốc của thuê bao còn đủ 270.000đ.</li></ul>',
                'cost' => '270.000đ/3 tháng',
                'category_id' => 3,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => '6F90',
                'summary' => '<p><span style="color:#14928f"><strong>5GB/tháng</strong></span> tốc độ cao</p><p><span style="color:#14928f"><strong>Miễn phí</strong></span> cuộc gọi nội mạng <span style="color:#14928f"><strong>dưới 10 phút</strong></span></p><p><span style="color:#14928f"><strong>15 phút</strong></span> gọi ngoại mạng/tháng</p>',
                'description' => '<ul><li>Chu kỳ: 6 tháng/lần đăng ký</li><li>Miễn phí cuộc gọi nội mạng <strong>dưới 10 phút</strong></li><li><strong>15 phút</strong> gọi ngoại mạng/tháng</li><li><strong>250 tin nhắn</strong> nội mạng/tháng</li><li><strong>5GB data</strong>/tháng hết lưu lượng dừng truy cập</li></ul><p><strong>Điều kiện đăng ký gói 3F90 Viettel</strong></p><ul><li>Thuê bao di động Viettel kích hoạt mới trong khoảng thời gian từ sau ngày 15/11/2018</li><li>Thuê bao đang hoạt động 2 chiều tại thời điểm đăng ký.</li><li>Tài khoản gốc của thuê bao còn đủ 540.000đ.</li></ul>',
                'cost' => '540.000đ/6 tháng',
                'category_id' => 3,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => '12F90',
                'summary' => '<p><span style="color:#14928f"><strong>5GB/tháng</strong></span> tốc độ cao</p><p><span style="color:#14928f"><strong>Miễn phí</strong></span> cuộc gọi nội mạng <span style="color:#14928f"><strong>dưới 10 phút</strong></span></p><p><span style="color:#14928f"><strong>15 phút</strong> </span>gọi ngoại mạng/tháng</p>',
                'description' => '<ul><li>Chu kỳ: 12 tháng/lần đăng ký</li><li>Miễn phí cuộc gọi nội mạng <strong>dưới 10 phút</strong></li><li><strong>15 phút</strong> gọi ngoại mạng/tháng</li><li><strong>250 tin nhắn</strong> nội mạng/tháng</li><li><strong>5GB data</strong>/tháng hết lưu lượng dừng truy cập</li></ul><p><strong>Điều kiện đăng ký gói 3F90 Viettel</strong></p><ul><li>Thuê bao di động Viettel kích hoạt mới trong khoảng thời gian từ sau ngày 15/11/2018</li><li>Thuê bao đang hoạt động 2 chiều tại thời điểm đăng ký.</li><li>Tài khoản gốc của thuê bao còn đủ 1.080.000đ.</li></ul>',
                'cost' => '80.000đồng/tháng',
                'category_id' => 3,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'V199',
                'summary' => '<p><span style="color:#14928f"><strong>6GB</strong></span> tốc độ cao/ngày</p><p><span style="color:#14928f"><strong>Miễn phí</strong> </span>cuộc gọi nội mạng <span style="color:#14928f"><strong>dưới 10 phút</strong></span></p><p><strong><span style="color:#14928f">50 phút</span></strong> gọi ngoại mạng trong nước</p>',
                'description' => '<ul><li>Miễn phí tất cả cuộc gọi nội mạng Viettel trong nước (chỉ áp dụng cho các cuộc gọi dưới 10 phút)</li><li>Tặng ngay 50 phút gọi ngoại mạng trong nước</li><li>6GB data/ngày (tương đương 180GB data/tháng)</li><li>Đối tượng áp dụng: thuê bao trả trước thuộc danh sách và nhận được SMS mời đăng ký từ Viettel.</li></ul>',
                'cost' => '199.000đ/30 ngày',
                'category_id' => 3,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'V90X',
                'summary' => '<p><strong><span style="color:#14928f">Miễn Phí</span> 30GB</strong>&nbsp;tốc độ cao (1Gb/ Ngày)<br><span style="color:#14928f"><strong>Miễn phí</strong></span>&nbsp;cuộc gọi nội mạng&nbsp;<span style="color:#14928f"><strong>dưới 20 phút</strong></span><br><span style="color:#14928f"><strong>Miễn phí</strong></span>&nbsp;<strong>20 phút</strong>&nbsp;gọi ngoại mạng trong nước</p>',
                'description' => '<ul><li>Miễn phí tất cả cuộc gọi nội mạng Viettel trong nước (chỉ áp dụng cho các cuộc gọi dưới 20 phút)</li><li>Tặng ngay 20&nbsp;phút gọi ngoại mạng trong nước</li><li>1GB data/ngày (tương đương 30GB data/tháng)</li><li>Đối tượng áp dụng: thuê bao di động trả trước đang hoạt động</li><li>Cước phí:&nbsp;90.000đ/30 ngày</li></ul>',
                'cost' => '90.000đ/tháng.',
                'category_id' => 3,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'TOMD30',
                'summary' => '<p><strong>1GB</strong> tốc độ cao</p>',
                'description' => '<ul><li>Cước phí: 30.000đ/lần đăng ký.</li><li>Lưu lượng tốc độ cao: 1GB.</li><li>Thời gian sử dụng: đến hết 1GB.</li><li>Hết lưu lượng ngừng truy cập.</li></ul><p>Với 30.000đ Quý khách sẽ có 1GB lưu lượng tốc độ cao để sử dụng. Không hạn chế thời gian sử dụng. Hết 1GB lưu lượng ngừng truy cập.</p>',
                'cost' => '30.000đ/không giới hạn ngày',
                'category_id' => 4,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'ST15K',
                'summary' => '<p><span style="color:#14928f"><strong>3GB</strong></span> tốc độ cao</p><p>Sử dụng trong <span style="color:#14928f"><strong>3 ngày</strong></span></p>',
                'description' => '<ul><li>Cước phí: 15.000đ/3 ngày.</li><li>Lưu lượng tốc độ cao: 3GB.</li><li>Thời gian sử dụng: 3 ngày kể từ ngày đăng ký.</li><li>Hết lưu lượng ngừng truy cập.</li></ul><p>Với 15.000đ Quý khách sẽ có 3GB lưu lượng tốc độ cao, sử dụng trong 3 ngày kể từ ngày đăng ký. Hết lưu lượng ngừng truy cập.</p>',
                'cost' => '15.000đ/3 ngày',
                'category_id' => 6,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'MI5D',
                'summary' => '<p><span style="color:#14928f"><strong>500MB</strong></span> tốc độ cao/ngày</p><p>Hết lưu lượng ngừng truy cập</p>',
                'description' => '<ul><li>Lưu lượng tốc độ cao: 500MB.</li><li>Thời gian sử dụng: đến 24h ngày đăng ký.</li><li>Hết lưu lượng ngừng truy cập.</li></ul><p>Với 5.000 đồng có 500MB data tốc độ cao sử dụng đến 24h ngày đăng ký.</p>',
                'cost' => '5.000đ/ngày',
                'category_id' => 4,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'MI10D',
                'summary' => '<p><span style="color:#14928f"><strong>2GB</strong></span> tốc độ cao</p><p>Hết 2GB ngừng truy cập</p>',
                'description' => '<ul><li>Lưu lượng tốc độ cao: 2GB.</li><li>Thời gian sử dụng: 7 ngày kể từ ngày đăng ký.</li><li>Hết 2GB tính cước theo gói Mobile Internet đang sử dụng (nếu có) hoặc ngừng truy cập.</li></ul><p>2GB Data tốc độ cao sử dụng đến 24h ngày đăng ký. Hết lưu lượng ngừng truy cập.</p>',
                'cost' => '10.000đ/ngày',
                'category_id' => 4,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'V30K',
                'summary' => '<p><strong>200MB+100phút</strong> nội mạng</p>',
                'description' => '<p>Cước phí: 30.000đ/tháng</p>',
                'cost' => '30.000đ/tháng',
                'category_id' => 5,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'V50K',
                'summary' => '<p><strong>100 phút</strong> nội mạng</p>',
                'description' => '<p>Cước phí 50.000đ/tháng</p>',
                'cost' => '50.000đ/tháng',
                'category_id' => 5,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'V70K',
                'summary' => '<p><strong>400MB+250 phút</strong> nội mạng</p>',
                'description' => '<p>Cước phí 70.000đ/tháng</p>',
                'cost' => '70.000đ/tháng',
                'category_id' => 5,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'V150K',
                'summary' => '<p><strong>2.5GB+500 phút</strong> nội mạng</p>',
                'description' => '<p>Cước phí 150.000đ/tháng</p>',
                'cost' => '150.000đ/tháng',
                'category_id' => 5,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'V100K',
                'summary' => '<p><strong>300 phút</strong> nội mạng</p>',
                'description' => '<p>Cước phí 100.000đ/tháng</p>',
                'cost' => '100.000đ/tháng',
                'category_id' => 5,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'T50K',
                'summary' => '<p><strong><span style="color:#14928f">200 phút gọ</span></strong>i Viettel</p><p><strong><span style="color:#14928f">100 SMS</span></strong> nội mạng</p><p>Áp dụng thuê bao trả trước trong danh sách</p>',
                'description' => '<p><strong>Ưu đãi:</strong><br>- 200 phút gọi nội mạng<br>- 100 SMS nội mạng<br>- Chu kỳ sử dụng 30 ngày.<br>- Khi sử dụng hết số lượng phút gọi, tin nhắn khuyến mãi của Viettel miễn phí của gói thì cước phí sẽ là cước phí mặc định theo quy định của nhà mạng hiện hành.<br><strong>Đối tượng áp dụng:</strong>&nbsp;Thuê bao di động trả trước nằm trong danh sách.</p>',
                'cost' => '50.000đ/30 ngày',
                'category_id' => 5,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'D50',
                'summary' => '<p><span style="color:#14928f"><strong>3.5GB</strong></span> tốc độ cao</p><p>Hết 3.5GB truy cập tốc độ thông thường</p>',
                'description' => '<p>Miễn phí 3,5GB lưu lượng Data/30 ngày.</p><p>Hết 3.5GB truy cập tốc độ thông thường.</p>',
                'cost' => '50.000đ/30 ngày',
                'category_id' => 2,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'D70',
                'summary' => '<p><span style="color:#14928f"><strong>7GB</strong></span> tốc độ cao</p><p>Hết 7GB truy cập tốc độ thông thường</p>',
                'description' => '<p>Miễn phí 7GB lưu lượng Data/30 ngày.</p><p>Hết 7GB truy cập tốc độ thông thường.</p>',
                'cost' => '70.000đ/30 ngày',
                'category_id' => 2,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'D120',
                'summary' => '<p><span style="color:#14928f"><strong>12GB</strong></span> tốc độ cao</p><p>Hết 12GB truy cập tốc độ thông thường</p>',
                'description' => '<p>Miễn phí 12GB lưu lượng Data/30 ngày.</p><p>Hết 12GB truy cập tốc độ thông thường.</p>',
                'cost' => '120.000đ/30 ngày',
                'category_id' => 2,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'D200',
                'summary' => '<p><span style="color:#14928f"><strong>20GB</strong> </span>tốc độ cao</p><p>Hết 20GB truy cập tốc độ thông thường</p>',
                'description' => '<p>Miễn phí 20GB lưu lượng Data/30 ngày.</p><p>Hết 20GB truy cập tốc độ thông thường.</p>',
                'cost' => '200.000đ/30 ngày',
                'category_id' => 2,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'D300',
                'summary' => '<p><span style="color:#14928f"><strong>24GB</strong></span> tốc độ cao/6 tháng</p><p>Hết 24GB truy cập tốc độ thông thường</p>',
                'description' => '<p>Miễn phí 24GB lưu lượng Data/6 tháng.</p><p>Hết 24GB truy cập tốc độ thông thường.</p>',
                'cost' => '300.000đ/6 tháng',
                'category_id' => 2,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'D500',
                'summary' => '<p><strong>48GB</strong> tốc độ cao/12 tháng</p><p>Hết 48GB truy cập tốc độ thông thường</p>',
                'description' => '<p>Miễn phí 48GB lưu lượng Data/12 tháng.</p><p>Hết 48GB truy cập tốc độ thông thường.</p>',
                'cost' => '500.000đ/12 tháng',
                'category_id' => 2,
                'type' => 0,
                'count' => 0
            ],
            [
                'name' => 'D900',
                'summary' => '<p><strong>84GB</strong> tốc độ cao/12 tháng</p><p>Hết 84GB truy cập tốc độ thông thường</p>',
                'description' => '<p>Miễn phí 84GB lưu lượng Data/12 tháng.</p><p>Hết 84GB truy cập tốc độ thông thường.</p>',
                'cost' => '900.000đ/12 tháng',
                'category_id' => 2,
                'type' => 0,
                'count' => 0
            ]
        ];

        foreach ($pakages as $package) {
            Package::create($package);
        }
    }
}
