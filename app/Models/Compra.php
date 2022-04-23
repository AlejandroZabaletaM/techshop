<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable=['fecha','descripcion','estado','user_id','producto_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function producto_compra()
    {
        return $this->belongsToMany(Producto_Compra::class);
    }
}
