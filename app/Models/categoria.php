<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table ='categorias';
    protected $primaryKey = 'id_categoria';
    public $timestamps = 'true';

    public function products(){
        return $this->hasMany(Product::class, 'id_producto');
    }
    public function mueble(){
        return $this->hasMany(mueble::class, 'id_productom');
    }
    public function decoracion(){
        return $this->hasMany(decoracion::class, 'id_productod');
    }
    public function herramienta(){
        return $this->hasMany(herramienta::class, 'id_productoh');
    }
    public function almacenamiento(){
        return $this->hasMany(almacenamiento::class, 'id_productoa');
    }


}
