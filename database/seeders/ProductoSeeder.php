<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'nombre'=>'Samsung Galaxy S20',
            'codigo'=>'S123456789',
            'precio'=>10000,
            'stock'=>10,
            'consignado'=>true,
            'image'=>'https://static.turbosquid.com/Preview/2020/02/26__19_23_30/f1.jpgC1934372-8DE5-4304-A4F0-B73D5C603192Large.jpg',
            'category_id'=>1,
        ]);
        Product::create([
            'nombre'=>'laptop HP 15-aw003la',
            'codigo'=>'HP123456789',
            'precio'=>7000,
            'stock'=>20,
            'consignado'=>true,
            'image'=>'https://intercompras.com/images/productgallery/HP_V7S27LA_ICECAT_21933461.jpg',
            'category_id'=>2,
        ]);
        Product::create([
            'nombre'=>'Cargador de laptop hp 15-aw003la',
            'codigo'=>'HP23457891',
            'precio'=>300,
            'stock'=>30,
            'consignado'=>true,
            'image'=>'https://intercompras.com/images/productgallery/HP_V7S27LA_ICECAT_21933461.jpg',
            'category_id'=>3,
        ]);
        Product::create([
            'nombre'=>'Camara Sony Alpha a7',
            'codigo'=>'CA12312412',
            'precio'=>40000,
            'stock'=>10,
            'consignado'=>true,
            'image'=>'https://todo-fotografia.com/wp-content/uploads/2013/10/Sony-Alpha-7.jpg',
            'category_id'=>4,
        ]);
        Product::create([
            'nombre'=>'Sony MDR-XB950AP/B',
            'codigo'=>'AU12312412',
            'precio'=>500,
            'stock'=>10,
            'consignado'=>true,
            'image'=>'https://www.onlinecolombia.net/articulos/activos/imagenes/Sony_MDR-XB950AP-B.jpg',
            'category_id'=>5,
        ]);
        Product::create([
            'nombre'=>'Television Sony 48W650D',
            'codigo'=>'TV234235235',
            'precio'=>20000,
            'stock'=>10,
            'consignado'=>true,
            'image'=>'https://m.media-amazon.com/images/I/41e5ebfrC6L._AC_.jpg',
            'category_id'=>6,
        ]);
        Product::create([
            'nombre'=>'Minicomponente lg XBOOM CM4360',
            'codigo'=>'TV234235235',
            'precio'=>7000,
            'stock'=>10,
            'consignado'=>true,
            'image'=>'https://www.lg.com/cac/images/equipo-de-sonido/MD05607430/gallery/D3.jpg',
            'category_id'=>7,
        ]);
    }
}
