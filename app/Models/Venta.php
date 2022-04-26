<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable=['user_id','producto_id','tipo_venta','fecha_venta','total_ventas','estado_venta','descuento_venta','comision_venta'];

    public function producto()
    {
        return $this->belongsToMany(Producto::class, 'producto_venta');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
