<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'imagen', 'activa'];


    public function productos()
    {
        //Nuestra categoria puede tener muchos productos
        return $this->hasMany(Producto::class);
    }

    //Accesor tomando en cuenta la convencion del nombre del campo 
    public function getImagenAttribute()
    {
        if (file_exists('storage/categorias/'. $this->imagen))
            return $this->imagen;
        else
            return 'noimg.jpg';
    }
}
