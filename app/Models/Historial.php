<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;
    protected $fillable=['user_id','producto_id','fecha_registro','productos_registrados','productos_ofertados','productos_comprados','productos_consignados']; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function producto()
    {
        return $this->belongsToMany(Producto::class);
    }
}
