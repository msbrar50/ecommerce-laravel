<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table("products")->insert(

            [

                [
                    'name'=>'LG Mobile',
                    'price'=>'10000',
                    'description'=>'Smart phone with 4gb RAM and 128GB HDD',
                    'category'=>'mobile',
                    'gallery'=>'https://www.unlocked-mobiles.com/images/colours/LG-THINQ-aurora-black4.jpg',
                ],
                [
                    'name'=>'Samsung S23 Ultra',
                    'price'=>'40000',
                    'description'=>'Smart phone with 8gb RAM and 256GB HDD',
                    'category'=>'mobile',
                    'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/uk/2501/gallery/uk-galaxy-s25-s938-sm-s938bzkgeub-544815311?$684_547_JPG$',
                ],
                [
                    'name'=>'Samsung 4k TV',
                    'price'=>'17000',
                    'description'=>' Samsung Smart TV with PurColour: Samsung PurColour improves the quality of any image, uncovers hidden details, and helps show your contents true colours',
                    'category'=>'tv',
                    'gallery'=>'https://m.media-amazon.com/images/I/81AX8kD7BaL.__AC_SX300_SY300_QL70_ML2_.jpg',
                ],
                [
                    'name'=>'TCL',
                    'price'=>'80000',
                    'description'=>'With Fire TV built-in, enjoy endless entertainment on thousands of apps and channels, including BBC iPlayer, Netflix, Prime Video, YouTube, Disney+, NOW, Freeview play and many more. (subscription fees may apply)',
                    'category'=>'tv',
                    'gallery'=>'https://m.media-amazon.com/images/I/71tsVZIgIzL._AC_SX679_.jpg',
                ],
                [
                    'name'=>'Subcold',
                    'price'=>'55000',
                    'description'=>'Smart phone with 8gb RAM and 512GB HDD',
                    'category'=>'fridge',
                    'gallery'=>'https://m.media-amazon.com/images/I/61fqIo6I9lL.__AC_SY445_SX342_QL70_ML2_.jpg',
                   ]



            ]
        );
    }
}
