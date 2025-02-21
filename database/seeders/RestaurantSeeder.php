<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                "city" => "Bandung",
                "name" => "Pecel Madiun Bude Sinta",
                "category" => "Main Course, Pecel, Beverages",
                "image" => "assets/img/restaurant/pecel-madiun.jpg",
                "alt" => "Pecel Madiun Bude Sinta",
                "distance" => "0.2 km",
                "time" => "20 min",
                "rating" => "4.8",
                "link" => "#"
            ],
            [
                "city" => "Bandung",
                "name" => "Wingstop - Buahbatu",
                "category" => "Main Course, Beverages, Dessert, Chicken",
                "image" => "assets/img/restaurant/wingstop.jpg",
                "alt" => "Wingstop - Buahbatu",
                "distance" => "1.8 km",
                "time" => "40 min",
                "rating" => "4.9",
                "link" => "#"
            ],
            [
                "city" => "Bandung",
                "name" => "Mie Gacoan - Bojongsoang",
                "category" => "Noodles, Fast Food, Beverages",
                "image" => "assets/img/restaurant/mie-gacoan.jpg",
                "alt" => "Mie Gacoan - Bojongsoang",
                "distance" => "0.5 km",
                "time" => "23 min",
                "rating" => "4.6",
                "link" => "#"
            ],
            [
                "city" => "Bandung",
                "name" => "Warung Sate Khas Madura Pak Rohim - Telkom University",
                "category" => "Main Course, Sate",
                "image" => "assets/img/restaurant/sate.jpg",
                "alt" => "Warung Sate Khas Madura Pak Rohim - Telkom University",
                "distance" => "0.2 km",
                "time" => "20 min",
                "rating" => "4.8",
                "link" => "#"
            ],
            [
                "city" => "Bandung",
                "name" => "Baghdad Fried Chicken Cabang Bojongsoang",
                "category" => "Main Course, Rice, Chicken, Beverages",
                "image" => "assets/img/restaurant/baghdad-fried-chicken.jpg",
                "alt" => "Baghdad Fried Chicken Cabang Bojongsoang",
                "distance" => "0.2 km",
                "time" => "20 min",
                "rating" => "4.8",
                "link" => "#"
            ],
            [
                "city" => "Bandung",
                "name" => "Haus! STT Telkom",
                "category" => "Beverages, Dessert",
                "image" => "assets/img/restaurant/haus-indonesia.jpg",
                "alt" => "Haus! STT Telkom",
                "distance" => "0.3 km",
                "time" => "20 min",
                "rating" => "4.7",
                "link" => "#"
            ],
            [
                "city" => "Bandung",
                "name" => "Alumni Coffee Universitas Telkom",
                "category" => "Beverages, Fast Food, Dessert, Coffee",
                "image" => "assets/img/restaurant/alumni-coffee.jpg",
                "alt" => "Alumni Coffee Universitas Telkom",
                "distance" => "0.1 km",
                "time" => "18 min",
                "rating" => "4.8",
                "link" => "#"
            ],
            [
                "city" => "Bandung",
                "name" => "Tel-U Coffee",
                "category" => "Coffee, Beverages, Dessert",
                "image" => "assets/img/restaurant/tel-u_coffee.jpg",
                "alt" => "Tel-U Coffee",
                "distance" => "0.1 km",
                "time" => "18 min",
                "rating" => "4.8",
                "link" => "#"
            ],
            [
                "city" => "Jakarta",
                "name" => "Sate Khas Senayan",
                "category" => "Main Course, Indonesian",
                "image" => "assets/img/restaurant/sate_khas_senayan.jpg",
                "alt" => "Sate Khas Senayan",
                "distance" => "0.5 km",
                "time" => "15 min",
                "rating" => "4.7",
                "link" => "#"
            ],
            [
                "city" => "Jakarta",
                "name" => "Bebek Kaleyo",
                "category" => "Main Course, Indonesian",
                "image" => "assets/img/restaurant/bebek_kaleyo.jpg",
                "alt" => "Bebek Kaleyo",
                "distance" => "1.0 km",
                "time" => "25 min",
                "rating" => "4.8",
                "link" => "#"
            ],
            [
                "city" => "Jakarta",
                "name" => "Union Brasserie, Bakery & Bar",
                "category" => "Dessert, Cafe, Bakery",
                "image" => "assets/img/restaurant/union_brasserie.jpg",
                "alt" => "Union Brasserie, Bakery & Bar",
                "distance" => "2.2 km",
                "time" => "30 min",
                "rating" => "4.6",
                "link" => "#"
            ],
            [
                "city" => "Jakarta",
                "name" => "Warung Leko",
                "category" => "Main Course, Indonesian",
                "image" => "assets/img/restaurant/warung-leko.jpg",
                "alt" => "Warung Leko",
                "distance" => "1.8 km",
                "time" => "20 min",
                "rating" => "4.5",
                "link" => "#"
            ],
            [
                "city" => "Jakarta",
                "name" => "Holyduck",
                "category" => "Main Course, Indonesian, Duck",
                "image" => "assets/img/restaurant/holyduck-medan-sangrai-coffeeshop.jpg",
                "alt" => "Holyduck",
                "distance" => "2.5 km",
                "time" => "35 min",
                "rating" => "4.9",
                "link" => "#"
            ],
            [
                "city" => "Jakarta",
                "name" => "Le Quartier",
                "category" => "French, Fine Dining",
                "image" => "assets/img/restaurant/le_quartier.jpg",
                "alt" => "Le Quartier",
                "distance" => "3.0 km",
                "time" => "40 min",
                "rating" => "4.8",
                "link" => "#"
            ],
            [
                "city" => "Jakarta",
                "name" => "Melly's Garden Bar & Resto",
                "category" => "Bar, Indonesian",
                "image" => "assets/img/restaurant/melly-s-garden.jpg",
                "alt" => "Melly's Garden Bar & Resto",
                "distance" => "2.0 km",
                "time" => "25 min",
                "rating" => "4.4",
                "link" => "#"
            ],
            [
                "city" => "Jakarta",
                "name" => "Gioi Jakarta",
                "category" => "Asian, Fusion",
                "image" => "assets/img/restaurant/gioi.jpg",
                "alt" => "Gioi Jakarta",
                "distance" => "0.9 km",
                "time" => "18 min",
                "rating" => "4.6",
                "link" => "#"
            ]
        ];

        DB::table('restaurants')->insert($restaurants);
    }
}
