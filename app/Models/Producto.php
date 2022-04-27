<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory; 
    
    protected $fillable=['nombre','codigo','precio','stock','consignado','imagen','categoria_id','user_id'];

    public function categoria()
    {
        return $this->belongsToMany(Categoria::class, 'producto_categoria');
    }

    public function venta(){
        return $this->belongsToMany(Venta::class, 'producto_venta');
    }

    public function compra(){
        return $this->belongsToMany(Compra::class, 'producto_compra');
    }

    public function user()
    {
        //Uno o muchos productos pertenecen a un usuario
        return $this->belongsTo(User::class);
    }

    public function pregunta()
    {
        //Uno o muchas preguntas pertenecen a un producto
        return $this->hasMany(Pregunta::class);
    }

    public function kardex()
    {
        //Un kardex pertenece a un producto
        return $this->hasOne(Kardex::class);
    }

    public function historial(){
        return $this->hasMany(Historial::class);
    }

    
    //Acceso tomando en cuenta la convencion del nombre del campo 
    public function getImagenAttribute()
    {
        if (file_exists('storage/productos/'. $this->imagen))
            return $this->imagen;
        else
            return 'noimg.jpg';
    }
}
