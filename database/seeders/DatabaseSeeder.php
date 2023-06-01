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
            [ 'name'=>'Apple iPhone 13 Pro, chip M2', 'date_Start'=> '24/05/2023', 'date_end'=> '24/06/2023', 'price'=>220.15,'discountPerc'=>50 ,'image'=>'Iphone.jpg','luogo_di_fruizione'=>'negozio fisico','metodo_di_fruizione'=>'negozio fisico','desc'=>'Telefono Display Super Retina XDR con ProMotion da 8.6','comp_name'=>'Apple Inc.'],
            [ 'name'=>'Samsung Galaxy S22', 'date_Start'=> '27/05/2023', 'date_end'=> '28/06/2023', 'price'=>860,'discountPerc'=>20 ,'image'=>'s22.jpg','luogo_di_fruizione'=>'negozio fisico','metodo_di_fruizione'=>'negozio fisico','desc'=>'Telefono display da 6,1 pollici in tecnologia Dynamic AMOLED, risoluzione Full HD+.','comp_name'=>'Samsung'],
            [ 'name'=>'APPLE iPad Pro 11" Chip M2', 'date_Start'=> '02/05/2023', 'date_end'=> '20/06/2023' ,'price'=>1299.99,'discountPerc'=>20,'image'=>'Ipad.jpg','luogo_di_fruizione'=>'negozio fisico','metodo_di_fruizione'=>'negozio fisico','desc'=>'Tablet Display Super Retina XDR con ProMotion da 6.7','comp_name'=>'Apple Inc.' ],
            [ 'name'=>'Samsung Galaxy Tab A8', 'date_Start'=> '05/05/2023', 'date_end'=> '25/06/2023' ,'price'=>320,'discountPerc'=>15,'image'=>'s8.jpg','luogo_di_fruizione'=>'negozio fisico','metodo_di_fruizione'=>'negozio fisico','desc'=>'Tablet display  11″ , RAM e 128/256GB','comp_name'=>'Samsung' ],
            [ 'name'=>'Apple MacBook Pro 13" M2','date_Start'=> '10/05/2023', 'date_end'=> '10/07/2023' , 'price'=>159.00,'discountPerc'=>10 ,'image'=>'Mac.jpg','luogo_di_fruizione'=>'negozio fisico','metodo_di_fruizione'=>'negozio fisico','desc'=>'Computer Display Super Retina XDR con ProMotion da 7.8','comp_name'=>'Apple Inc.'],
            [ 'name'=>'Nike Air Jordan 1 Retro Chicago (2015)', 'date_Start'=> '07/02/2022', 'date_end'=> '20/03/2022' ,'price'=>520.15 ,'discountPerc'=>60,'image'=>'Nike1.jpg','luogo_di_fruizione'=>'negozio fisico','metodo_di_fruizione'=>'negozio fisico','desc'=>'Scarpa sportiva, utile per gite ed eventi di sport di gruppo','comp_name'=>'Nike Inc.'],
            [ 'name'=>'Adidas Yeezy', 'date_Start'=> '08/02/2022', 'date_end'=> '28/07/2022' ,'price'=>300 ,'discountPerc'=>25,'image'=>'yeezy.jpg','luogo_di_fruizione'=>'negozio fisico','metodo_di_fruizione'=>'negozio fisico','desc'=>'Scarpa sportiva,stravagante','comp_name'=>'Adidas'],
            [ 'name'=>'Nike Dunk Low Off-White University Red', 'date_Start'=> '14/12/2023', 'date_end'=> '05/08/2023', 'price'=>399.99,'discountPerc'=>30 ,'image'=>'Nike2.jpg','luogo_di_fruizione'=>'negozio fisico','metodo_di_fruizione'=>'negozio fisico','desc'=>'Scarpa sportiva, utile per gite ed eventi di sport di gruppo','comp_name'=>'Nike Inc.'],
            [ 'name'=>'Appartamento Milano AirBnb', 'date_Start'=> '16/10/2020', 'date_end'=> '17/11/2020' , 'price'=>90.00 ,'discountPerc'=>15,'image'=>'Appartamento.jpg','luogo_di_fruizione'=>'negozio fisico','metodo_di_fruizione'=>'negozio fisico','desc'=>'Appartamento per passare un soggiorno di gioia con la famiglia.','comp_name'=>'Airbnb Inc.'],
            [ 'name'=>'Appartamento Roma Trivago', 'date_Start'=> '16/10/2020', 'date_end'=> '17/11/2020' , 'price'=>90.00 ,'discountPerc'=>15,'image'=>'Appartamento.jpg','luogo_di_fruizione'=>'negozio fisico','metodo_di_fruizione'=>'negozio fisico','desc'=>'Appartamento per passare un soggiorno di gioia con la famiglia.','comp_name'=>'Trivago'],
            [ 'name'=>'Bracciale Bead Heart Tag Tiffany' ,'date_Start'=> '02/04/2022', 'date_end'=> '03/05/2022' , 'price'=>700.00 ,'discountPerc'=>15,'image'=>'Collana.jpg','luogo_di_fruizione'=>'negozio fisico','metodo_di_fruizione'=>'negozio fisico','desc'=>'Bracciale per donne , utilizzato per eventi e battesimi...','comp_name'=>'Tiffany & Co'],
            [ 'name'=>'CHANEL-N°5','date_Start'=> '30/11/2019', 'date_end'=> '01/01/2020' , 'price'=>100.00 ,'discountPerc'=>15,'image'=>'Chanel1.jpg','luogo_di_fruizione'=>'negozio fisico','metodo_di_fruizione'=>'negozio fisico','desc'=>'Miglior profumo per donne e uomini, usato per abbigliamento di lusso','comp_name'=>'Chanel S.A.'],
            [ 'name'=>'Abbonamento 6 mesi di musica', 'date_Start'=> '19/07/2022', 'date_end'=> '23/09/2023' , 'price'=>50.00 ,'discountPerc'=>15,'image'=>'Spotify1.jpg','luogo_di_fruizione'=>'online','metodo_di_fruizione'=>'online','desc'=>'Intrattenimento e musica da ballo, disponibile su Spotify  ','comp_name'=>'Spotify'],
            [ 'name'=>'Abbonamento 6 mesi di musica', 'date_Start'=> '19/07/2022', 'date_end'=> '23/09/2023' , 'price'=>35.00 ,'discountPerc'=>15,'image'=>'Apple2.jpg','luogo_di_fruizione'=>'online','metodo_di_fruizione'=>'online','desc'=>'Intrattenimento e musica, disponibile su Apple Music ','comp_name'=>'Apple Inc.'],
            [ 'name'=>'Abbonamento 6 mesi di musica', 'date_Start'=> '19/07/2022', 'date_end'=> '23/09/2023' , 'price'=>40.00 ,'discountPerc'=>40,'image'=>'Amazon1.jpg','luogo_di_fruizione'=>'online','metodo_di_fruizione'=>'online','desc'=>' Musica da ballo di tutti i generi, disponibile su Amazon Music ','comp_name'=>'Amazon']


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
            ['comp_Id'=>1, 'name'=>'Apple','location'=>'New York','ragione_sociale'=> 'Apple Inc.','tipologia' =>'telefonia','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Apple.jpg'],
            ['comp_Id'=>2, 'name'=>'Nike','location'=>'Milano','ragione_sociale'=> 'Nike Inc.','tipologia' =>'abbigliamento','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Nike.jpg'],
            ['comp_Id'=>3, 'name'=>'Spotify','location'=>'San Francisco','ragione_sociale'=> 'Spotify S.R.L.','tipologia' =>'intrattenimento','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Spotify.jpg'],
            ['comp_Id'=>4, 'name'=>'Airbnb','location'=>'California','ragione_sociale'=> 'Airbnb S.R.L','tipologia' =>'agenzia immobiliare','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Airbnb.jpg'],
            ['comp_Id'=>5, 'name'=>'Tiffany','location'=>'Parigi','ragione_sociale'=> 'Tiffany & Co','tipologia' =>'oggetti di lusso','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Tiffany.jpg'],
            ['comp_Id'=>6, 'name'=>'Chanel', 'location'=>'Parigi','ragione_sociale'=> 'Chanel S.A.','tipologia' =>'oggetti di lusso','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Chanel.jpg'],
            ['comp_Id'=>7, 'name'=>'Adidas','location'=>'Berlino','ragione_sociale'=> 'Adidas S.P.A','tipologia' =>'abbigliamento','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'adidas.jpg'],
            ['comp_Id'=>8, 'name'=>'Samsung', 'location'=>'Suwon-si','ragione_sociale'=> 'Samsung Electronics S.P.A.','tipologia' =>'telefonia','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'samsung.jpg'],
            ['comp_Id'=>9, 'name'=>'Trivago', 'location'=>'Monaco','ragione_sociale'=> 'Trivago S.P.A','tipologia' =>'agenzia vacanze','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Trivago.jpg'],
            ['comp_Id'=>10, 'name'=>'Amazon', 'location'=>'Miami','ragione_sociale'=> 'Amazon Logistica S.R.L','tipologia' =>'e-commerce','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'Amazon.jpg'],
            ['comp_Id'=>11, 'name'=>'Ebay', 'location'=>'San Jose','ragione_sociale'=> 'Ebay S.R.L','tipologia' =>'e-commerce','desc'=> 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.','image'=>'ebay.jpg'],
        ]);

    }
}
