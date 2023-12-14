<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    public $timestamps = 'true';

    public function categoria(){
        return $this->belongsTo(categoria::class, 'id_categoria', 'id_categoria');
    }
}
