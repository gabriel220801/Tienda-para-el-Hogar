<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mueble extends Model
{
    protected $table = 'mueble';
    protected $primaryKey = 'id_productom';
    public $timestamps = 'true';

    public function categoria(){
        return $this->belongsTo(categoria::class, 'id_categoria', 'id_categoria');
    }
}
