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

     const DESCPROD = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor posuere odio, vitae cursus enim luctus non. Fusce efficitur est ut fringilla facilisis. Curabitur at dui tincidunt, finibus mauris sed, pulvinar tellus. Nulla at condimentum mauris, at sollicitudin nulla. Nunc interdum dolor id ligula auctor, a sagittis mauris volutpat. Proin vel rutrum dui. Aliquam erat volutpat. Fusce semper sollicitudin risus, nec finibus enim blandit nec. Suspendisse potenti. Nullam ultrices, sapien sed tincidunt varius, turpis dolor vulputate velit, vel luctus felis tortor sed sem.</p>';

    public function run()
    {
        DB::table('category')->insert([
            [ 'name' => 'Hotel e viaggi' ],
            [ 'name' => 'Elettronica'],
            [ 'name' => 'Moda'],
            [ 'name' => 'Casa e giardino'],
            [ 'name' => 'Sport'],
            [ 'name' => 'Salute e bellezza'],
        
        
        ]);
         
        DB::table('users')->insert([
            ['name' => 'Alex', 'surname' => 'Verdi', 'email' => 'alex@verdi.it', 'username' => 'alexalex',
                'password' => Hash::make('alexalex'), 'role' => 'staff','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'age'=>20, 'phone'=>338854565,'conf_password'=>'','gender'=>'M'],
            ['name' => 'Marco', 'surname' => 'Gialli', 'email' => 'marco@bianchi.it', 'username' => 'useruser',
                'password' => Hash::make('useruser'), 'role' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'age'=>26, 'phone'=>33585402,'conf_password'=>'','gender'=>'M'],
            ['name' => 'Mario', 'surname' => 'Rossi',  'email' => 'mario@rossi.it', 'username' => 'adminadmin',
                'password' => Hash::make('adminadmin'), 'role' => 'admin', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'age'=>21, 'phone'=>36685841,'conf_password'=>'','gender'=>'M'],
            ['name' => 'Luigi', 'surname' => 'Bianchi',  'email' => 'luigi@bianchi.it', 'username' => 'luigiluigi',
                'password' => Hash::make('luigiluigi'), 'role' => 'user','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'age'=>29, 'phone'=>389840523,'conf_password'=>'','gender'=>'M'],
            ['name' => 'Prova', 'surname' => 'Test',  'email' => 'luigi@bianchi.it', 'username' => 'provaprova',
                'password' => Hash::make('provaprova'), 'role' => 'user','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'age'=>29, 'phone'=>389840523,'conf_password'=>'','gender'=>'M']
            ]);

 
        DB::table('coupon')->insert([
            [ 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s") ,'code'=>Str::random(8) ],
            [ 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s") ,'code'=>Str::random(8)  ],
            [ 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s") ,'code'=>Str::random(8)  ],
            [ 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s") ,'code'=>Str::random(8)  ],
            [ 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s") ,'code'=>Str::random(8)  ],
            [ 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s") ,'code'=>Str::random(8) ],
            [ 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s"),'code'=>Str::random(8)  ],
            [ 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s") ,'code'=>Str::random(8)  ],
            [ 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s") ,'code'=>Str::random(8)  ],
            [ 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s") ,'code'=>Str::random(8)  ],
        ]);
        
        DB::table('promotion')->insert([
            [ 'coupon_id'=>1 ,'name'=>'Apple iPhone 13 Pro', 'date_Start'=> '2022/10/05', 'date_end'=> '2022/11/05', 'price'=>220.15,'discountPerc'=>50 ,'image'=>'Iphone.jpg','desc' => self::DESCPROD,'comp_name'=>'Apple Inc.'],
            [ 'coupon_id'=>2 ,'name'=>'APPLE iPad Pro 11" Chip M2', 'date_Start'=> '2020/09/03', 'date_end'=> '2020/10/05' ,'price'=>1299.99,'discountPerc'=>20,'image'=>'Ipad.jpg','desc' => self::DESCPROD,'comp_name'=>'Apple Inc.' ],
            [ 'coupon_id'=>3 ,'name'=>'Apple MacBook Pro 13" M2','date_Start'=> '2022/12/24', 'date_end'=> '2023/01/10' , 'price'=>159.00,'discountPerc'=>10 ,'image'=>'Mac.jpg','desc' => self::DESCPROD,'comp_name'=>'Apple Inc.'],
            [ 'coupon_id'=>4 ,'name'=>'Nike Air Jordan 1 Retro Chicago (2015)', 'date_Start'=> '2022/02/07', 'date_end'=> '2022/03/20' ,'price'=>520.15 ,'discountPerc'=>60,'image'=>'Nike1.jpg','desc' => self::DESCPROD,'comp_name'=>'Nike Inc.'],
            [ 'coupon_id'=>5 ,'name'=>'Nike Dunk Low Off-White University Red', 'date_Start'=> '2022/12/14', 'date_end'=> '2023/01/05', 'price'=>399.99,'discountPerc'=>30 ,'image'=>'Nike2.jpg','desc' => self::DESCPROD,'comp_name'=>'Nike Inc.'],
            [ 'coupon_id'=>6 ,'name'=>'Appartamento Milano AirBnb', 'date_Start'=> '2020/10/16', 'date_end'=> '2020/11/17' , 'price'=>90.00 ,'discountPerc'=>15,'image'=>'Appartamento.jpg','desc' => self::DESCPROD,'comp_name'=>'Airbnb Inc.'],
            [ 'coupon_id'=>7 ,'name'=>'Bracciale Bead Heart Tag Tiffany' ,'date_Start'=> '2022/04/02', 'date_end'=> '2022/05/03' , 'price'=>700.00 ,'discountPerc'=>15,'image'=>'Collana.jpg','desc' => self::DESCPROD,'comp_name'=>'Tiffany & Co'],
            [ 'coupon_id'=>8,'name'=>'CHANEL-N°5','date_Start'=> '2019/11/30', 'date_end'=> '2020/01/01' , 'price'=>100.00 ,'discountPerc'=>15,'image'=>'Chanel1.jpg','desc' => self::DESCPROD,'comp_name'=>'Chanel S.A.'],
            [ 'coupon_id'=>9,'name'=>'Abbonamento 6 mesi di musica', 'date_Start'=> '2022/07/19', 'date_end'=> '2022/09/23' , 'price'=>50.00 ,'discountPerc'=>15,'image'=>'Spotify1.jpg','desc' => self::DESCPROD,'comp_name'=>'Spotify'],
            [ 'coupon_id'=>10,'name'=>'Abbonamento 6 mesi di musica', 'date_Start'=> '2022/07/19', 'date_end'=> '2022/09/23' , 'price'=>35.00 ,'discountPerc'=>15,'image'=>'Apple2.jpg','desc' => self::DESCPROD,'comp_name'=>'Apple Inc.'],
            [ 'coupon_id'=>11,'name'=>'Abbonamento 6 mesi di musica', 'date_Start'=> '2022/07/19', 'date_end'=> '2022/09/23' , 'price'=>40.00 ,'discountPerc'=>40,'image'=>'Amazon1.jpg','desc' => self::DESCPROD,'comp_name'=>'Amazon']


        ]);

        DB::table('faq')->insert([
            ['id'=>1, 'question'=>'Come posso acquistare i coupon?','answer'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat'],
            ['id'=>2, 'quesiton'=>'Come mi posso registrare?','answer'=>'Lorem 5858ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat'],
            ['id'=>3, 'question'=>'Quanti coupon posso acquistare?','answer'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat'],
            ['id'=>4, 'question'=>'Come posso acquistare i coupon?','answer'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat'],
            ['id'=>5, 'quesiton'=>'Come mi posso registrare?','answer'=>'Lorem 5858ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat'],
            ['id'=>6, 'question'=>'Quanti coupon posso acquistare?','answer'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat'],
            ['id'=>7, 'question'=>'Come posso acquistare i coupon?','answer'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat'],
            ['id'=>8, 'quesiton'=>'Come mi posso registrare?','answer'=>'Lorem 5858ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat'],
            ['id'=>9, 'question'=>'Quanti coupon posso acquistare?','answer'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat'],
        ]);
        
        DB::table('company')->insert([
            ['comp_Id'=>1, 'name'=>'Apple Inc.', 'promo_Id'=>1,'location'=>'','image'=>'Apple.jpg'],
            ['comp_Id'=>2, 'name'=>'Nike Inc.', 'promo_Id'=>2,'location'=>'','image'=>'Nike.jpg'],
            ['comp_Id'=>3, 'name'=>'Spotify', 'promo_Id'=>4,'location'=>'','image'=>'Spotify.jpg'],
            ['comp_Id'=>4, 'name'=>'Airbnb Inc.', 'promo_Id'=>5,'location'=>'','image'=>'Airbnb.jpg'],
            ['comp_Id'=>5, 'name'=>'Tiffany & Co', 'promo_Id'=>6,'location'=>'','image'=>'Tiffany.jpg'],
            ['comp_Id'=>6, 'name'=>'Chanel S.A.', 'promo_Id'=>3,'location'=>'','image'=>'Chanel.jpg'],
            ['comp_Id'=>7, 'name'=>'Apple Inc.', 'promo_Id'=>1,'location'=>'','image'=>'Apple.jpg'],
            ['comp_Id'=>8, 'name'=>'Nike Inc.', 'promo_Id'=>2,'location'=>'','image'=>'Nike.jpg'],
            ['comp_Id'=>9, 'name'=>'Spotify', 'promo_Id'=>4,'location'=>'','image'=>'Spotify.jpg'],
            ['comp_Id'=>10, 'name'=>'Airbnb Inc.', 'promo_Id'=>5,'location'=>'','image'=>'Airbnb.jpg'],
            ['comp_Id'=>11, 'name'=>'Tiffany & Co', 'promo_Id'=>6,'location'=>'','image'=>'Tiffany.jpg'],
            ['comp_Id'=>12, 'name'=>'Chanel S.A.', 'promo_Id'=>3,'location'=>'','image'=>'Chanel.jpg'],
            ['comp_Id'=>13, 'name'=>'Amazon', 'promo_Id'=>7,'location'=>'','image'=>'Amazon.jpg'],
        ]);

    }
}
