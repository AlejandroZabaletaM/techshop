<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory; 
    
    protected $fillable=['nombre','codigo','precio','stock','consignado','imagen','categoria_id','user_id'];

    public function producto_categoria()
    {
        return $this->belongsTo(Producto_Categoria::class);
    }

    public function producto_venta(){
        return $this->belongsToMany(Producto_Venta::class);
    }

    public function producto_compra(){
        return $this->belongsToMany(Producto_Compra::class);
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
        if (file_exists('storage/products/'. $this->imagen))
            return $this->imagen;
        else
            return 'noimg.jpg';
    }
}
