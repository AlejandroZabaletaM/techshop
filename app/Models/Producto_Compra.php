<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto_Compra extends Model
{
    use HasFactory;

    protected $fillable=['compra_id','producto_id'];

    public function compra()
    {
        return $this->belongsToMany(Compra::class);
    }
    public function producto()
    {
        return $this->belongsToMany(Producto::class);
    }
}
