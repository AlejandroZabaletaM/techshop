<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;
    protected $fillable=['user_id','producto_id','cantidad','tipo']; 

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function producto()
    {
        return $this->belongsToMany(Producto::class);
    }
}
