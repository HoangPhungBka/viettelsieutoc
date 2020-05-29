<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['id' => 1, 'name' => 'COMBO 4G + PHÚT GỌI', 'slug' => 'goi-combo-4G-phut-goi', 'description' => '<p>Phù hợp cho thuê bao có nhu cầu liên lạc nhiều và sử dụng data</p>']);
        Category::create(['id' => 2, 'name' => 'GÓI PHÚT GỌI', 'slug' => 'goi-phut-goi', 'description' => '<p>Dành cho thuê bao thường xuyên liên lạc</p>']);
        Category::create(['id' => 3, 'name' => 'GÓI 4G 30 NGÀY', 'slug' => 'goi-4g-30-ngay', 'description' => '<p>Khuyến mại: <span style="color:#14928f"><strong>Nhân 5 lưu lượng, giá không đổi</strong></span></p>']);
        Category::create(['id' => 4, 'name' => 'GÓI DCOM', 'slug' => 'goi-dcom', 'description' => '<p>Dành cho <span style="color:#14928f"><strong>SIM DCOM</strong></span>: Chỉ có chức năng vào mạng, không nghe, gọi, nhắn tin</p>']);
        Category::create(['id' => 5, 'name' => 'GÓI THEO NGÀY/TUẦN', 'slug' => 'goi-theo-ngay-tuan', 'description' => '<p>Đăng ký <strong><span style="color:#14928f">linh hoạt, tiết kiệm</span></strong> chi phí</p>']);
        Category::create(['id' => 6, 'name' => 'GÓI ĐĂNG KÝ 6 THÁNG 1 NĂM', 'slug' => 'goi-dang-ky-6-thang-1-nam', 'description' => '<p>Gói được đăng ký nhiều trong tuần, trong tháng</p>']);
    }
}
