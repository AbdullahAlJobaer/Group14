<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
           [ 

            'name'=>'Chess Board Harry Potter',
            'price'=> '600',
            'description'=> 'This beautiful chess board is made in Sheesham wood on the darker side and white on the lighter side.',
            'category'=> 'Chess Sets',
            'gallery'=> 'https://www.chessstation.com/wp-content/uploads/2020/11/p5.jpg'
            
            ],
           
           [
            'name'=>'Antique Chess set',
            'price'=> '700',
            'description'=> 'This beautiful chess board is made in black on the darker side and yellow on the lighter side.',
            'category'=> 'Chess Sets',
            'gallery'=> 'https://www.chessstation.com/wp-content/uploads/2020/12/12055576816_495490446.jpg'
           ],

           [
            'name'=>'Brains Magnetic Chess Set',
            'price'=> '500',
            'description'=> 'Brains Magnetic Chess Set with Folding Chess Board Educational Toys for Kids and Adults Board Game',
            'category'=> 'Chess Sets',
            'gallery'=> 'https://www.chessstation.com/wp-content/uploads/2020/12/11529422349_226086066.jpg'
           ],

           [
            'name'=>'LUNATIC CRAFTWORK Collectible Folding Hand Carved Wood',
            'price'=> '750',
            'description'=> 'Wooden Chess Game 12X12 INCHES Board Set with Wooden Pieces',
            'category'=> 'Chess Sets',
            'gallery'=> 'https://images-na.ssl-images-amazon.com/images/I/814nmPoYHFL._SL1500_.jpg'
           ],

           [
            'name'=>'Palm Royal Handicrafts Best Folding Wooden Handmade Chess Set Board',
            'price'=> '1100',
            'description'=> 'Chess Set Board With Magnetic Pieces with Extra Queen with Premium Quality 10x10 inch.',
            'category'=> 'Chess Sets',
            'gallery'=> 'https://images-na.ssl-images-amazon.com/images/I/81uVxTfDspL._SL1500_.jpg'
           ],

           [
            'name'=>'Mimi Collectible Folding Hand Carved Wood',
            'price'=> '450',
            'description'=> 'Wooden Chess Game 11X11 Inches Board Set with Wooden Pieces',
            'category'=> 'Chess Sets',
            'gallery'=> 'https://images-na.ssl-images-amazon.com/images/I/5143HIuChfL.jpg'
           ],

           [
            'name'=>'Brass Premium Roman Chess Board',
            'price'=> '8500',
            'description'=> 'Chess Board Set - Brass Premium Roman Chess Board - CNC-BR-4 - by CHESSNCRAFTS.',
            'category'=> 'Chess Sets',
            'gallery'=> 'https://images-na.ssl-images-amazon.com/images/I/91oBglarRpL._SL1500_.jpg'
           ],

           [
            'name'=>'WIGANO Wooden Chess Board',
            'price'=> '6000',
            'description'=> 'WIGANO 21"inch X 21"inch Wooden Chess Board with 3.75"inch King Size',
            'category'=> 'Chess Sets',
            'gallery'=> 'https://images-na.ssl-images-amazon.com/images/I/61YjRxD1cXL._SL1500_.jpg'
           ],
           [
            'name'=>'ANK Handcrafted Wooden (Magnetic) Foldable Chess Board',
            'price'=> '1700',
            'description'=> '(12 in x 12 in) Foldable Chess Board Game',
            'category'=> 'Chess Sets',
            'gallery'=> 'https://images-na.ssl-images-amazon.com/images/I/81HtmDHEYnL._SL1500_.jpg'
           ],

           [
            'name'=>'KERWA Magnetic Chess Board',
            'price'=> '300',
            'description'=> 'A Choice of Champions. Foldable-Travel Chess Game Set for Kids & Adults',
            'category'=> 'Chess Sets',
            'gallery'=> 'https://images-na.ssl-images-amazon.com/images/I/41pnnmvdXkL.jpg'
           ]
        
            ]);
    }
}
