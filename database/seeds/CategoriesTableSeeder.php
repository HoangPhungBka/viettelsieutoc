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
        Category::create(['name' => '4G TRỌN GÓI', 'slug' => '4g-tron-goi', 'description' => '<p>Khuyến mại: <span style="color:#14928f"><strong>Nhân 5 lưu lượng, giá không đổi</strong></span></p>']);
        Category::create(['name' => 'GÓI DCOM', 'slug' => 'goi-dcom', 'description' => '<p>Dành cho <span style="color:#14928f"><strong>SIM DCOM</strong></span>: Chỉ có chức năng vào mạng, không nghe, gọi, nhắn tin</p>']);
        Category::create(['name' => 'GÓI COMBO', 'slug' => 'goi-combo', 'description' => '<p>Phù hợp cho thuê bao có nhu cầu liên lạc nhiều và sử dụng data</p>']);
        Category::create(['name' => 'GÓI THEO NGÀY', 'slug' => 'goi-theo-ngay', 'description' => '<p>Đăng ký <strong><span style="color:#14928f">linh hoạt, tiết kiệm</span></strong> chi phí</p>']);
        Category::create(['name' => 'GOI PHÚT GỌI', 'slug' => 'goi-phut-goi', 'description' => '<p>Dành cho thuê bao thường xuyên liên lạc</p>']);
        Category::create(['name' => 'GÓI HOT', 'slug' => 'goi-hot', 'description' => '<p>Gói được đăng ký nhiều trong tuần, trong tháng</p>']);
    }
}
