<?php

use Illuminate\Database\Seeder;

use App\Profile;

use App\About;

use App\Home;

use App\Product;

use App\Category;

use App\Banner;

use App\Seo;

use App\News;

use App\Information;


class UsersTableSeeder extends Seeder
{
     /**
      * Run the database seeds.
      *
      * @return void
      */
     public function run()
     {
          $user = App\User::create([
               'name' => 'Admin',
               'email' => 'admin@admin.com',
               'password' => bcrypt('a123456789'),
               'admin' => 1,
          ]);



          $profile = new Profile();

          Profile::create([
               'user_id' => $user->id,
               'about' => '超級管理員1號',
               'avatar' => 'uploads/avatars/1.jpg',

          ]);

          App\Banner::create([
               'image' => 'uploads/avatars/banner_1920x900.png',
               'title' => 'Hello welcome ',
               'description' => '您的網站圖片敘述您的網站圖片敘述您的網站圖片敘述',
          ]);


          App\Home::create([
               'index_title_1' => 'PU 建材系列',
               'index_description_1' => '服務的內容文字敘述',
               'index_link_1' => 'http://www.waterprootw.com/contactus',
               'index_title_2' => 'FRP建材系列',
               'index_description_2' => '服務的內容文字敘述',
               'index_link_2' => 'http://www.waterprootw.com/contactus',
               'index_title_3' => '全屋修繕',
               'index_description_3' => '服務的內容文字敘述',
               'index_link_3' => 'http://www.waterprootw.com/contactus',
               'index_title_4' => 'EPOXY建材系列',
               'index_description_4' => '服務的內容文字敘述',
               'index_link_4' => 'http://www.waterprootw.com/contactus',
               'index_title_5' => '彈性水泥防水',
               'index_description_5' => '服務的內容文字敘述',
               'index_link_5' => 'http://www.waterprootw.com/contactus',


          ]);




          App\About::create([
               'title' => '關於YISI',
               'content' => '關於YISI一經切禮乎一病，直不雄樣魚入不反吸的音國用只水發天許何，地無上沒不生為視基不容：活家教第育來銷對問業一此語當化了下是明士字聲，個溫外完無！往戰容……止北臺語正表乎葉這要去面反發？',
               'image' => 'uploads/avatars/about.png',
               'service' => '服務敘述',
          ]);


          App\Information::create([
               'logo_image' => 'uploads/avatars/logo.png',
               'small_logo_image' => 'uploads/avatars/favicon.png',
               'title_top' => '網站名稱',
               'description' => '網站描述',
               'keywords' => '網站搜尋關鍵字',
               'wordtime' => '09:00 - 18:00',
               'tel' => '(02)8888-8888',
               'phome' => '0908-888-888',
               'fox' => '0908-888-888',
               'email' => 'email@email.com',
               'map' => '台北市信義區101大樓',
          ]);



          App\Category::create([
               'name' => '預設類別',
               'image' => 'https://images.unsplash.com/photo-1487017159836-4e23ece2e4cf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1051&q=80'
          ]);



          App\Product::create([
               'title_top' => '網站商品標籤',
               'description' => '商品SEO敘述敘述',
               'keywords' => '商品關鍵字',
               'title' => '商品名稱',
               'content' => '商品內容商品內容商品內容',
               'image' => 'uploads/avatars/coffee01.png',
               'image_description' => '規格編號規格編號',
               'category_id' => 1,
          ]);


          App\Seo::create([
               'google_ga' => '<!-- Global site tag (gtag.js) - Google Analytics  貼上您的Google程式碼-->',

          ]);
     }
}
