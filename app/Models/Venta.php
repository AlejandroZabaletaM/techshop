<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    public function producto_venta()
    {
        return $this->belongsToMany(Producto_Venta::class);
    }
}
