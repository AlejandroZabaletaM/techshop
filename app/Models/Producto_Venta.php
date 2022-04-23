<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto_Venta extends Model
{
    use HasFactory;
    protected $fillable=['venta_id','producto_id'];

    public function venta()
    {
        return $this->belongsToMany(Venta::class);
    }
    public function producto()
    {
        return $this->belongsToMany(Producto::class);
    }
}
