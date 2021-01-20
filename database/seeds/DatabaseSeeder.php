<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // for($i=1;$i<=10;$i++) {
        // DB::table('users')->insert([
        // 	'name'=>Str::random(10),
        // 	'email'=>Str::random(10).'@gmail.com',
        // 	'is_admin'=> rand(0,1),
        // 	'password'=>Hash::make('password')
        // ]);
        // }
        //thêm sản phẩm
        // DB::insert('insert into products (code,name,description,category_id,price,created_at,updated_at,is_top,on_sale) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [1, 'Áo ấm nam','Áo ấm mùa đông','1','250000',now(),now(),0,0]);
        // DB::insert('insert into products (code,name,description,category_id,price,created_at,updated_at,is_top,on_sale) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [1, 'Áo ấm nữ','Áo ấm mùa đông','1','300000',now(),now(),0,0]);
        // DB::insert('insert into products (code,name,description,category_id,price,created_at,updated_at,is_top,on_sale) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [1, 'ipad 2020','máy tính bảng ipad sản xuất năm 2020','2','200000',now(),now(),0,0]);
        // DB::insert('insert into products (code,name,description,category_id,price,created_at,updated_at,is_top,on_sale) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [1, 'camera 2020 ','Máy ảnh sony sản xuất năm 2020','2','200000',now(),now(),0,0]);
        // DB::insert('insert into products (code,name,description,category_id,price,created_at,updated_at,is_top,on_sale) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [1, 'Sạc dự phòng','Sạc dự phòng điện thoại','2','100000',now(),now(),1,1]);
        // DB::insert('insert into products (code,name,description,category_id,price,created_at,updated_at,is_top,on_sale) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [1, 'Đồng hồ điện tử','đồng hồ điện tử','2','350000',now(),now(),1,1]);
        // DB::insert('insert into products (code,name,description,category_id,price,created_at,updated_at,is_top,on_sale) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [1, 'Ghế gỗ','Áo ấm mùa đông','3','240000',now(),now(),1,1]);
        // DB::insert('insert into products (code,name,description,category_id,price,created_at,updated_at,is_top,on_sale) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [1, 'máy rửa mặt','Áo ấm mùa đông','3','260000',now(),now(),1,1]);
        // DB::insert('insert into products (code,name,description,category_id,price,created_at,updated_at,is_top,on_sale) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [1, 'Áo ấm','Áo ấm mùa đông','3','300000',now(),now(),1,1]);
        //thêm danh mục
        // DB::insert('insert into categoris (name,created_at,updated_at) values (?, ?, ?)', ['Thời trang',now(),now()]);
        // DB::insert('insert into categoris (name,created_at,updated_at) values (?, ?, ?)', ['Công nghệ',now(),now()]);
        // DB::insert('insert into categoris (name,created_at,updated_at) values (?, ?, ?)', ['Đồ gia dụng',now(),now()]);
        //thêm ảnh sản phẩm 
        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/aoam1.jpg',1,now(),now()]);
        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/aoam2.jpg',1,now(),now()]);
        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/aoam3.jpg',1,now(),now()]);

        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/aoamnam1.jpg',1,now(),now()]);
        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/aoamnam2.jpg',1,now(),now()]);

        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/aoamnu1.jpg',1,now(),now()]);
        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/aoamnu2.jpg',1,now(),now()]);
    
        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/quanvainam1.jpg',1,now(),now()]);
        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/quanvainam2.jpg',1,now(),now()]);
        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/quanvainu1.jpg',1,now(),now()]);
        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/quanvainu2.jpg',1,now(),now()]);
        
        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/vayngan1.jpg',1,now(),now()]);
        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/vayngan2.jpg',1,now(),now()]);
        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/vaydai1.jpg',1,now(),now()]);
        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/vaydai2.jpg',1,now(),now()]);
        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/vaydam1.jpg',1,now(),now()]);
        // DB::insert('insert into images (path,product_id,created_at,updated_at) values (?, ?, ?, ?)', ['public/web/img/products/vaydam2.jpg',1,now(),now()]);
        

    }
}
