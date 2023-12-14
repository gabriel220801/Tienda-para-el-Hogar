<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class almacenamiento extends Model
{
    protected $table = 'almacenamiento';
    protected $primaryKey = 'id_productoa';
    public $timestamps = 'true';

    public function categoria(){
        return $this->belongsTo(categoria::class, 'id_categoria', 'id_categoria');
    }
}
