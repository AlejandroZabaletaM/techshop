<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoCompra extends Model
{
    use HasFactory;

    protected $fillable=['compra_id','producto_id'];
    public $timestamps=false;
}
