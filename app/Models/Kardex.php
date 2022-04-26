<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    use HasFactory;
    protected $fillable=['producto_id','fecha_publicacion','preguntas','compras'];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
    
}
