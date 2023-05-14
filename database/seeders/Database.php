<?php

//namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Database extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     const DESCPROD = '<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. </p><p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.</p>';

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
            ['name' => 'Franco','username' => 'francofranco','userID'=>1, 'phone'=>338854565,'coupon_id'=>1,'email'=>'franco@user.it','status'=>'user','password'=>Hash::make('francofranco'),'age'=> rand (19 , 60),'conf_password'=>'','gender'=>'M'],
            ['name' => 'Lino','username' => 'linolino', 'phone'=>33585402,'coupon_id'=>'','email'=>'lino@admin.it','status'=>'admin','password'=>Hash::make('linolino'),'age'=> rand (19 , 60),'conf_password'=>'','gender'=>'M'],
            ['name' => 'Luigi','username' => 'luigiluigi','userID'=>2, 'phone'=>36685841,'coupon_id'=>2,'email'=>'luigi@user.it','status'=>'user','password'=>Hash::make('luigiluigi'),'age'=> rand (19 , 60),'conf_password'=>'','gender'=>'M'],
            ['name' => 'Mara','username' => 'maramara', 'phone'=>389840523,'coupon_id'=>'','email'=>'mara@staff.it','status'=>'staff','password'=>Hash::make('maramara'),'age'=> rand (19 , 60),'conf_password'=>'','gender'=>'F'],
            ['name' => 'Lisa','username' => 'lisalisa', 'phone'=>37275841,'coupon_id'=>'','email'=>'lisa@staff.it','status'=>'staff','password'=>Hash::make('lisalisa'),'age'=> rand (19 , 60),'conf_password'=>'','gender'=>'F'],
            ['name' => 'Pina','username' => 'pinapina','userID'=>3, 'phone'=>339656210,'coupon_id'=>3,'email'=>'pina@user.it','status'=>'user','password'=>Hash::make('pinapina'),'age'=> rand (19 , 60),'conf_password'=>'','gender'=>'F'],
            ['name' => 'Mirco','username' => 'mircomirco','userID'=>4, 'phone'=>336525420,'coupon_id'=>4,'email'=>'mirco@user.it','status'=>'user','password'=>Hash::make('mircomirco'),'age'=> rand (19 , 60),'conf_password'=>'','gender'=>'M'],
            
        ]);


       
        DB::table('product')->insert([
            ['name' => 'Camicia Armani Exchange','catId' => 3,'userID'=>4, 'price'=>220.15,'desc'=>self::DESCPROD,'data_pubb'=>'10/02/2022' ],
            ['name' => 'Apple Iphone X 256GB', 'catId'=>2,'userID'=>1,'price'=>1299.99,'desc'=>self::DESCPROD,'data_pubb'=>'05/06/2019'],
            ['name' => 'Nike running sneaker ','catId' => 5,'userID'=>2, 'price'=>159.00,'desc'=>self::DESCPROD,'data_pubb'=>'06/09/2018' ],
            ['name' => 'Tenerife weekend in hotel a 4 stelle','catId' => 1,'userID'=>'', 'price'=>520.15,'desc'=>self::DESCPROD,'data_pubb'=>'16/10/2021' ],
            ['name' => 'Lampadario Tiffany','catId' => 4,'userID'=>'', 'price'=>399.99,'desc'=>self::DESCPROD,'data_pubb'=>'15/01/2022' ],
            ['name' => 'Profumo Chanel ','catId' => 6,'userID'=>3, 'price'=>90.00,'desc'=>self::DESCPROD,'data_pubb'=>'19/03/2023' ],
        
        ]);

 
        DB::table('coupon')->insert([
            ['coupon_Id'=>1, 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s")  ],
            ['coupon_Id'=>2, 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s")  ],
            ['coupon_Id'=>3, 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s")  ],
            ['coupon_Id'=>4, 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s")  ],
            ['coupon_Id'=>5, 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s")  ],
            ['coupon_Id'=>6, 'date_emiss'=> date("Y-m-d H:i:s"),'date_exp'=> date("Y-m-d H:i:s")  ],
        ]);
        
        DB::table('promotion')->insert([
            ['promo_Id'=>1, 'cod_promo'=> str_random(10),'coupon_Id'=> 1, 'date_Start'=> date("Y-m-d H:i:s"), 'date_end'=> date("Y-m-d H:i:s") ],
            ['promo_Id'=>2, 'cod_promo'=> str_random(10),'coupon_Id'=> 2, 'date_Start'=> date("Y-m-d H:i:s"), 'date_end'=> date("Y-m-d H:i:s")  ],
            ['promo_Id'=>3, 'cod_promo'=> str_random(10),'coupon_Id'=> 3, 'date_Start'=> date("Y-m-d H:i:s"), 'date_end'=> date("Y-m-d H:i:s")  ],
            ['promo_Id'=>4, 'cod_promo'=> str_random(10),'coupon_Id'=> 4, 'date_Start'=> date("Y-m-d H:i:s"), 'date_end'=> date("Y-m-d H:i:s")  ],
            ['promo_Id'=>5, 'cod_promo'=> str_random(10),'coupon_Id'=> 5, 'date_Start'=> date("Y-m-d H:i:s"), 'date_end'=> date("Y-m-d H:i:s")  ],
            ['promo_Id'=>6, 'cod_promo'=> str_random(10),'coupon_Id'=> 6, 'date_Start'=> date("Y-m-d H:i:s"), 'date_end'=> date("Y-m-d H:i:s")  ],


        ]);
        DB::table('faq')->insert([
            ['faq_Id'=>1, 'question'=>'','answer'=>''],
            ['faq_Id'=>2, 'quesiton'=>'','answer'=>''],
            ['faq_Id'=>3, 'question'=>'','answer'=>''],
        ]);
        
        DB::table('company')->insert([
            ['comp_Id'=>1, 'name'=>'Apple Inc.','userId'=>1, 'promo_Id'=>1,'location'=>''],
            ['comp_Id'=>2, 'name'=>'Nike Inc.','userId'=>2, 'promo_Id'=>2,'location'=>''],
            ['comp_Id'=>3, 'name'=>'Giorgio Armani s.p.a.','userId'=>4, 'promo_Id'=>4,'location'=>''],
            ['comp_Id'=>4, 'name'=>'Airbnb Inc.','userId'=>'', 'promo_Id'=>'','location'=>''],
            ['comp_Id'=>5, 'name'=>'Tiffany & Co','userId'=>'', 'promo_Id'=>'','location'=>''],
            ['comp_Id'=>6, 'name'=>'Chanel S.A.','userId'=>3, 'promo_Id'=>3,'location'=>''],
        ]);

    }
}
