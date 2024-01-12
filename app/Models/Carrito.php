<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $table = 'carritos'; 
    
    protected $fillable = [
        'id_producto'
    ];

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'carritos_productos', 'id_usuario', 'id_producto')
            ->withPivot('cantidad');
    }
}
