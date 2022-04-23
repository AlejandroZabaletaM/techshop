<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    protected $fillable=['pregunta','respuesta','estado','producto_id'];

    public function producto()
    {
        return $this->belongsToMany(Producto::class);
    }
}
