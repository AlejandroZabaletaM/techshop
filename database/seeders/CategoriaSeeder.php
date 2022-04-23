<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Agregar a travez de array
        Categoria::create([
            'nombre'=>'Celulares',
            'imagen'=>'https://s03.s3c.es/imag/_v0/770x420/8/d/e/600x400_moviles-smartphones-recurso-dreamstime.jpg',
            'activa'=>true,
        ]);
        Categoria::create([
            'nombre'=>'Laptops',
            'imagen'=>'https://www.bancaynegocios.com/wp-content/uploads/2017/05/laptops-600x400.jpg',
            'activa'=>true,
        ]);
        Categoria::create([
            'nombre'=>'Accesorios',
            'imagen'=>'https://m.media-amazon.com/images/I/41fPmYrEZeL._AC_SX355_.jpg',
            'activa'=>true,
        ]);
        Categoria::create([
            'nombre'=>'Camaras y fotografia',
            'imagen'=>'https://haciendofotos.com/wp-content/uploads/camara-fotos-compacta-600x400.jpg',
            'activa'=>true,
        ]);
        Categoria::create([
            'nombre'=>'Audifonos',
            'imagen'=>'https://blog.cdn.own3d.tv/resize=fit:crop,height:400,width:600/YeyTuElQzCn55yjkCQMH',
            'activa'=>true,
        ]);
        Categoria::create([
            'nombre'=>'Television y video',
            'imagen'=>'https://revistaempresarial.com/wp-content/uploads/2018/07/Samung-1.jpg',
            'activa'=>true,
        ]);
        Categoria::create([
            'nombre'=>'Audio para el hogar',
            'imagen'=>'https://www.quonty.com/blog/wp-content/uploads/2018/08/tienda-online-de-informatica-y-tecnologia-304.jpg',
            'activa'=>true,
        ]);

    }
}
