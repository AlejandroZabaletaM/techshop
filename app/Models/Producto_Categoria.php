<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto_Categoria extends Model
{
    use HasFactory;

    protected $fillable=['categoria_id','producto_id'];

    public function categoria()
    {
        return $this->belongsToMany(Categoria::class);
    }
    public function producto()
    {
        return $this->belongsToMany(Producto::class);
    }
}
