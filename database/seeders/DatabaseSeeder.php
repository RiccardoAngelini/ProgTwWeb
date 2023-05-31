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

     const DESCPROD = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor posuere odio, vitae cursus enim luctus non. Fusce efficitur est ut fringilla facilisis. Curabitur at dui tincidunt, finibus mauris sed, pulvinar tellus. Nulla at condimentum mauris, at sollicitudin nulla. Nunc interdum dolor id ligula auctor, a sagittis mauris volutpat. Proin vel rutrum dui. Aliquam erat volutpat. Fusce semper sollicitudin risus, nec finibus enim blandit nec. Suspendisse potenti. Nullam ultrices, sapien sed tincidunt varius, turpis dolor vulputate velit, vel luctus felis tortor sed sem.';

    public function run()
    {         
        DB::table('users')->insert([
            ['name' => 'Alex', 'surname' => 'Gialli', 'email' => 'alex@verdi.it', 'username' => 'staffstaff',
                'role' => 'staff','age'=>20, 'gender'=>'M','phone'=>338854565, 'password' => Hash::make('CoUwsksK'),
                'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            
            ['name' => 'Marco', 'surname' => 'Gialli', 'email' => 'marco@bianchi.it','username' => 'useruser', 
                'role' => 'user','age'=>26,'gender'=>'M','phone'=>33585402,'password' => Hash::make('CoUwsksK'),
                'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],  

            ['name' => 'Mario', 'surname' => 'Rossi',  'email' => 'mario@rossi.it', 'username' => 'adminadmin',
                'role' => 'admin','age'=>21,'gender'=>'M','phone'=>36685841,'password' => Hash::make('CoUwsksK'),
              'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")], 

            ['name' => 'Luigi', 'surname' => 'Bianchi',  'email' => 'luigi@bianchi.it', 'username' => 'luigiluigi',
                'role' => 'user','age'=>29, 'gender'=>'M','phone'=>389840523,'password' => Hash::make('luigiluigi'),
                'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],

            ['name' => 'Prova', 'surname' => 'Test',  'email' => 'luigi@bianchi.it', 'username' => 'provaprova',
                'role' => 'user','age'=>29,'gender'=>'M','phone'=>389840523,'password' => Hash::make('provaprova'), 
                'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
        ]);

 
        DB::table('coupon')->insert([
         
        ]);
        
        DB::table('promotion')->insert([
            [ 'name'=>'Apple iPhone 13 Pro, chip M2', 'date_Start'=> '24/05/2023', 'date_end'=> '24/06/2023', 'price'=>220.15,'discountPerc'=>50 ,'image'=>'Iphone.jpg','desc_short'=>'Telefono Display Super Retina XDR con ProMotion da 8.6','desc' => self::DESCPROD,'comp_name'=>'Apple Inc.'],
            [ 'name'=>'APPLE iPad Pro 11" Chip M2', 'date_Start'=> '02/05/2023', 'date_end'=> '20/06/2023' ,'price'=>1299.99,'discountPerc'=>20,'image'=>'Ipad.jpg','desc_short'=>'Tablet Display Super Retina XDR con ProMotion da 6.7','desc' => self::DESCPROD,'comp_name'=>'Apple Inc.' ],
            [ 'name'=>'Apple MacBook Pro 13" M2','date_Start'=> '10/05/2023', 'date_end'=> '10/07/2023' , 'price'=>159.00,'discountPerc'=>10 ,'image'=>'Mac.jpg','desc_short'=>'Computer Display Super Retina XDR con ProMotion da 7.8','desc' => self::DESCPROD,'comp_name'=>'Apple Inc.'],
            [ 'name'=>'Nike Air Jordan 1 Retro Chicago (2015)', 'date_Start'=> '07/02/2022', 'date_end'=> '20/03/2022' ,'price'=>520.15 ,'discountPerc'=>60,'image'=>'Nike1.jpg','desc_short'=>'Scarpa sportiva, utile per gite ed eventi di sport di gruppo','desc' => self::DESCPROD,'comp_name'=>'Nike Inc.'],
            [ 'name'=>'Nike Dunk Low Off-White University Red', 'date_Start'=> '14/12/2023', 'date_end'=> '05/08/2023', 'price'=>399.99,'discountPerc'=>30 ,'image'=>'Nike2.jpg','desc_short'=>'Scarpa sportiva, utile per gite ed eventi di sport di gruppo','desc' => self::DESCPROD,'comp_name'=>'Nike Inc.'],
            [ 'name'=>'Appartamento Milano AirBnb', 'date_Start'=> '16/10/2020', 'date_end'=> '17/11/2020' , 'price'=>90.00 ,'discountPerc'=>15,'image'=>'Appartamento.jpg','desc_short'=>'Appartamento per passare un soggiorno di gioia con la famiglia.','desc' => self::DESCPROD,'comp_name'=>'Airbnb Inc.'],
            [ 'name'=>'Bracciale Bead Heart Tag Tiffany' ,'date_Start'=> '02/04/2022', 'date_end'=> '03/05/2022' , 'price'=>700.00 ,'discountPerc'=>15,'image'=>'Collana.jpg','desc_short'=>'Bracciale per donne , utilizzato per eventi e battesimi...','desc' => self::DESCPROD,'comp_name'=>'Tiffany & Co'],
            [ 'name'=>'CHANEL-N°5','date_Start'=> '30/11/2019', 'date_end'=> '01/01/2020' , 'price'=>100.00 ,'discountPerc'=>15,'image'=>'Chanel1.jpg','desc_short'=>'Miglior profumo per donne e uomini, usato per abbigliamento di lusso','desc' => self::DESCPROD,'comp_name'=>'Chanel S.A.'],
            [ 'name'=>'Abbonamento 6 mesi di musica', 'date_Start'=> '19/07/2022', 'date_end'=> '23/09/2023' , 'price'=>50.00 ,'discountPerc'=>15,'image'=>'Spotify1.jpg','desc_short'=>'Intrattenimento e musica da ballo, disponibile su Spotify  ','desc' => self::DESCPROD,'comp_name'=>'Spotify'],
            [ 'name'=>'Abbonamento 6 mesi di musica', 'date_Start'=> '19/07/2022', 'date_end'=> '23/09/2023' , 'price'=>35.00 ,'discountPerc'=>15,'image'=>'Apple2.jpg','desc_short'=>'Intrattenimento e musica, disponibile su Apple Music ','desc' => self::DESCPROD,'comp_name'=>'Apple Inc.'],
            [ 'name'=>'Abbonamento 6 mesi di musica', 'date_Start'=> '19/07/2022', 'date_end'=> '23/09/2023' , 'price'=>40.00 ,'discountPerc'=>40,'image'=>'Amazon1.jpg','desc_short'=>' Musica da ballo di tutti i generi, disponibile su Amazon Music ','desc' => self::DESCPROD,'comp_name'=>'Amazon']


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
            ['comp_Id'=>1, 'name'=>'Apple Inc.','location'=>'New York','ragione_sociale'=> 'ragine sociale','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Apple.jpg'],
            ['comp_Id'=>2, 'name'=>'Nike Inc.','location'=>'milano','ragione_sociale'=> 'ragine sociale','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Nike.jpg'],
            ['comp_Id'=>3, 'name'=>'Spotify','location'=>'san Francisco','ragione_sociale'=> 'ragine sociale','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Spotify.jpg'],
            ['comp_Id'=>4, 'name'=>'Airbnb Inc.','location'=>'california','ragione_sociale'=> 'ragine sociale','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Airbnb.jpg'],
            ['comp_Id'=>5, 'name'=>'Tiffany & Co','location'=>'Parigi','ragione_sociale'=> 'ragine sociale','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Tiffany.jpg'],
            ['comp_Id'=>6, 'name'=>'Chanel S.A.', 'location'=>'Parigi','ragione_sociale'=> 'ragine sociale','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Chanel.jpg'],
            ['comp_Id'=>7, 'name'=>'Apple Inc.','location'=>'New York','ragione_sociale'=> 'ragine sociale','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Apple.jpg'],
            ['comp_Id'=>8, 'name'=>'Nike Inc.', 'location'=>'milano','ragione_sociale'=> 'ragine sociale','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Nike.jpg'],
            ['comp_Id'=>9, 'name'=>'Spotify', 'location'=>'san Francisco','ragione_sociale'=> 'ragine sociale','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Spotify.jpg'],
            ['comp_Id'=>10, 'name'=>'Airbnb Inc.','location'=>'california','ragione_sociale'=> 'ragine sociale','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Airbnb.jpg'],
            ['comp_Id'=>11, 'name'=>'Tiffany & Co','location'=>'Parigi','ragione_sociale'=> 'ragine sociale','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Tiffany.jpg'],
            ['comp_Id'=>12, 'name'=>'Chanel S.A.', 'location'=>'Parigi','ragione_sociale'=> 'ragine sociale','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Chanel.jpg'],
            ['comp_Id'=>13, 'name'=>'Amazon', 'location'=>'miami','ragione_sociale'=> 'ragine sociale','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Amazon.jpg'],
        ]);

    }
}
