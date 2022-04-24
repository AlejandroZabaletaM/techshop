<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'imagen', 'activa'];


    public function producto()
    {
        //Nuestra categoria puede tener muchos productos
        return $this->belongsToMany(Producto::class, 'producto_categoria');
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
