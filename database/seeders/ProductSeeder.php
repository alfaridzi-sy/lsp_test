<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_name'  => 'Organic Kale',
                'description'   => 'Daun kale segar yang kaya akan nutrisi, dipanen dari kebun organik kami.',
                'stock'         => 50,
                'unit'          => 'ikat',
                'price'         => 25000,
                'category_id'   => 2,
                'user_id'       => 2,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'product_name'  => 'Organic Basil',
                'description'   => 'Daun basil yang harum dan lezat, ditanam secara organik untuk digunakan dalam masakan.',
                'stock'         => 100,
                'unit'          => 'ikat',
                'price'         => 15000,
                'category_id'   => 2,
                'user_id'       => 2,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'product_name'  => 'Organic Mixed Salad Greens',
                'description'   => 'Campuran daun selada, bayam, dan rucola organik untuk membuat salad sehat.',
                'stock'         => 75,
                'unit'          => 'kantong',
                'price'         => 35000,
                'category_id'   => 2,
                'user_id'       => 2,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'product_name'  => 'Gelas Keramik Buatan Tangan',
                'description'   => 'Gelas keramik indah yang dibuat dengan tangan dengan desain rumit dan pegangan yang nyaman.',
                'stock'         => 30,
                'unit'          => 'gelas',
                'price'         => 120000,
                'category_id'   => 3,
                'user_id'       => 3,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'product_name'  => 'Vas Keramik Buatan Tangan',
                'description'   => 'Vas keramik elegan yang dibentuk dan dilapisi dengan warna alami.',
                'stock'         => 20,
                'unit'          => 'vas',
                'price'         => 200000,
                'category_id'   => 3,
                'user_id'       => 3,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'product_name'  => 'Mangkuk Hias Keramik',
                'description'   => 'Mangkuk hias keramik dengan pola unik, cocok untuk menampilkan buah - buahan arau menyajikan makanan ringan.',
                'stock'         => 40,
                'unit'          => 'mangkuk',
                'price'         => 80000,
                'category_id'   => 3,
                'user_id'       => 3,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'product_name'  => 'Scarf Batik Buatan Tangan',
                'description'   => 'Scarf cantik yang dibuat dengan tangan dengan pola batik tradisional Indonesia.',
                'stock'         => 50,
                'unit'          => 'scarf',
                'price'         => 250000,
                'category_id'   => 1,
                'user_id'       => 1,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'product_name'  => 'Tas Tote Batik',
                'description'   => 'Tas tote yang modis dan luas, dibuat dengan kain batik berkualitas tinggi.',
                'stock'         => 30,
                'unit'          => 'tas',
                'price'         => 350000,
                'category_id'   => 1,
                'user_id'       => 1,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'product_name'  => 'Set Sarung Bantal Batik',
                'description'   => 'Set sarung bantal terdiri dari dua sarung bantal dengan desain batik yang cerah, menambah sentuhan Indonesia pada dekorasi rumah Anda.',
                'stock'         => 40,
                'unit'          => 'set',
                'price'         => 150000,
                'category_id'   => 1,
                'user_id'       => 1,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]
        ]);
    }
}
