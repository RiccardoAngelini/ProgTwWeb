<?php

//namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     const DESCPROD = '<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum.</p>';

    public function run()
    {
        DB::table('category')->insert([
            ['catId' => 1, 'name' => 'Hotel e viaggi' ],
            ['catId' => 2, 'name' => 'Elettronica'],
            ['catId' => 3, 'name' => 'Moda'],
            ['catId' => 4, 'name' => 'Casa e giardino'],
            ['catId' => 5, 'name' => 'Sport'],
            ['catId' => 6, 'name' => 'Salute e bellezza'],
        
        
        ]);
         
        DB::table('user')->insert([
            ['name' => 'Franco','username' => 'francofranco','userID'=>1, 'phone'=>338854565,'email'=>'franco@user.it','ruolo'=>'user','password'=>Hash::make('francofranco'),'age'=> rand (19 , 60),'conf_password'=>'','gender'=>'M'],
            ['name' => 'Lino','username' => 'linolino','userID'=>2, 'phone'=>33585402,'email'=>'lino@admin.it','ruolo'=>'admin','password'=>Hash::make('linolino'),'age'=> rand (19 , 60),'conf_password'=>'','gender'=>'M'],
            ['name' => 'Luigi','username' => 'luigiluigi','userID'=>3, 'phone'=>36685841,'email'=>'luigi@user.it','ruolo'=>'user','password'=>Hash::make('luigiluigi'),'age'=> rand (19 , 60),'conf_password'=>'','gender'=>'M'],
            ['name' => 'Mara','username' => 'maramara', 'userID'=>4,'phone'=>389840523,'email'=>'mara@staff.it','ruolo'=>'staff','password'=>Hash::make('maramara'),'age'=> rand (19 , 60),'conf_password'=>'','gender'=>'F'],
            ['name' => 'Lisa','username' => 'lisalisa', 'userID'=>5,'phone'=>37275841,'email'=>'lisa@staff.it','ruolo'=>'staff','password'=>Hash::make('lisalisa'),'age'=> rand (19 , 60),'conf_password'=>'','gender'=>'F'],
            ['name' => 'Pina','username' => 'pinapina','userID'=>6, 'phone'=>339656210,'email'=>'pina@user.it','ruolo'=>'user','password'=>Hash::make('pinapina'),'age'=> rand (19 , 60),'conf_password'=>'','gender'=>'F'],
            ['name' => 'Mirco','username' => 'mircomirco','userID'=>7, 'phone'=>336525420,'email'=>'mirco@user.it','ruolo'=>'user','password'=>Hash::make('mircomirco'),'age'=> rand (19 , 60),'conf_password'=>'','gender'=>'M'],
            
        ]);


       
        DB::table('product')->insert([
            ['name' => 'Camicia Armani Exchange','userID'=>4, 'price'=>220.15,'desc'=>self::DESCPROD,'data_pubb'=>'2022-10-20' ],
            ['name' => 'Apple Iphone X 256GB','userID'=>1,'price'=>1299.99,'desc'=>self::DESCPROD,'data_pubb'=>'2019-06-05'],
            ['name' => 'Nike running sneaker ','userID'=>2, 'price'=>159.00,'desc'=>self::DESCPROD,'data_pubb'=>'2018-09-06' ],
            ['name' => 'Tenerife weekend in hotel a 4 stelle','userID'=>5, 'price'=>520.15,'desc'=>self::DESCPROD,'data_pubb'=>'2022-07-10' ],
            ['name' => 'Lampadario Tiffany','userID'=>6, 'price'=>399.99,'desc'=>self::DESCPROD,'data_pubb'=>'2021-08-20' ],
            ['name' => 'Profumo Chanel ','userID'=>3, 'price'=>90.00,'desc'=>self::DESCPROD,'data_pubb'=>'2020-01-20' ],
        
        ]);

 
        DB::table('coupon')->insert([
            ['coupon_Id'=>1, 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s")  ],
            ['coupon_Id'=>2, 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s")  ],
            ['coupon_Id'=>3, 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s")  ],
            ['coupon_Id'=>4, 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s")  ],
            ['coupon_Id'=>5, 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s")  ],
            ['coupon_Id'=>6, 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s")  ],
            ['coupon_Id'=>7, 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s")  ],
            ['coupon_Id'=>8, 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s")  ],
            ['coupon_Id'=>9, 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s")  ],
        ]);
        
        DB::table('promotion')->insert([
            ['promo_Id'=>1, 'cod_promo'=> Str::random(10),'coupon_Id'=>1 , 'date_Start'=> date("Y-m-d H:i:s"), 'date_end'=> '2022/11/05', 'price'=>220.15,'discountPerc'=>50 ,'image'=>'Iphone.jpg'],
            ['promo_Id'=>2, 'cod_promo'=> Str::random(10),'coupon_Id'=>2 , 'date_Start'=> date("Y-m-d H:i:s"), 'date_end'=> '2020/10/05' ,'price'=>1299.99,'discountPerc'=>20,'image'=>'Ipad.jpg' ],
            ['promo_Id'=>3, 'cod_promo'=> Str::random(10),'coupon_Id'=>3 , 'date_Start'=> date("Y-m-d H:i:s"), 'date_end'=> '2023/01/10' , 'price'=>159.00,'discountPerc'=>10 ,'image'=>'Mac.jpg'],
            ['promo_Id'=>4, 'cod_promo'=> Str::random(10),'coupon_Id'=>4 , 'date_Start'=> date("Y-m-d H:i:s"), 'date_end'=> '2022/03/20' ,'price'=>520.15 ,'discountPerc'=>60,'image'=>'Nike1.jpg'],
            ['promo_Id'=>5, 'cod_promo'=> Str::random(10),'coupon_Id'=>5 , 'date_Start'=> date("Y-m-d H:i:s"), 'date_end'=> '2023/01/05', 'price'=>399.99,'discountPerc'=>30 ,'image'=>'Nike2.jpg'],
            ['promo_Id'=>6, 'cod_promo'=> Str::random(10),'coupon_Id'=>6 , 'date_Start'=> date("Y-m-d H:i:s"), 'date_end'=> '2020/11/17' , 'price'=>90.00 ,'discountPerc'=>15,'image'=>'Appartamento.jpg'],
            ['promo_Id'=>7, 'cod_promo'=> Str::random(10),'coupon_Id'=>7 , 'date_Start'=> date("Y-m-d H:i:s"), 'date_end'=> '2022/05/03' , 'price'=>700.00 ,'discountPerc'=>15,'image'=>'Collana.jpg'],
            ['promo_Id'=>8, 'cod_promo'=> Str::random(10),'coupon_Id'=>8, 'date_Start'=> date("Y-m-d H:i:s"), 'date_end'=> '2020/01/01' , 'price'=>100.00 ,'discountPerc'=>15,'image'=>'Chanel1.jpg'],
            ['promo_Id'=>9, 'cod_promo'=> Str::random(10),'coupon_Id'=>9, 'date_Start'=> date("Y-m-d H:i:s"), 'date_end'=> '2022/09/23' , 'price'=>50.00 ,'discountPerc'=>15,'image'=>'Spotify1.jpg'],
        ]);
        DB::table('faq')->insert([
            ['faq_Id'=>1, 'question'=>'','answer'=>''],
            ['faq_Id'=>2, 'quesiton'=>'','answer'=>''],
            ['faq_Id'=>3, 'question'=>'','answer'=>''],
        ]);
        
        DB::table('company')->insert([
            ['comp_Id'=>1, 'name'=>'Apple Inc.','userId'=>1, 'promo_Id'=>1,'location'=>'','image'=>'Apple.jpg'],
            ['comp_Id'=>2, 'name'=>'Nike Inc.','userId'=>2, 'promo_Id'=>2,'location'=>'','image'=>'Nike.jpg'],
            ['comp_Id'=>3, 'name'=>'Spotify','userId'=>4, 'promo_Id'=>4,'location'=>'','image'=>'Spotify.jpg'],
            ['comp_Id'=>4, 'name'=>'Airbnb Inc.','userId'=>5, 'promo_Id'=>5,'location'=>'','image'=>'Airbnb.jpg'],
            ['comp_Id'=>5, 'name'=>'Tiffany & Co','userId'=>6, 'promo_Id'=>6,'location'=>'','image'=>'Tiffany.jpg'],
            ['comp_Id'=>6, 'name'=>'Chanel S.A.','userId'=>3, 'promo_Id'=>3,'location'=>'','image'=>'Chanel.jpg'],
            ['comp_Id'=>7, 'name'=>'Apple Inc.','userId'=>1, 'promo_Id'=>1,'location'=>'','image'=>'Apple.jpg'],
            ['comp_Id'=>8, 'name'=>'Nike Inc.','userId'=>2, 'promo_Id'=>2,'location'=>'','image'=>'Nike.jpg'],
            ['comp_Id'=>9, 'name'=>'Spotify','userId'=>4, 'promo_Id'=>4,'location'=>'','image'=>'Spotify.jpg'],
            ['comp_Id'=>10, 'name'=>'Airbnb Inc.','userId'=>5, 'promo_Id'=>5,'location'=>'','image'=>'Airbnb.jpg'],
            ['comp_Id'=>11, 'name'=>'Tiffany & Co','userId'=>6, 'promo_Id'=>6,'location'=>'','image'=>'Tiffany.jpg'],
            ['comp_Id'=>12, 'name'=>'Chanel S.A.','userId'=>3, 'promo_Id'=>3,'location'=>'','image'=>'Chanel.jpg'],
        ]);

    }
}
