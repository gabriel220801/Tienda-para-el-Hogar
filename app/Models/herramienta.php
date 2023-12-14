<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class herramienta extends Model
{
    protected $table = 'herramienta';
    protected $primaryKey = 'id_productoh';
    public $timestamps = 'true';

    public function categoria(){
        return $this->belongsTo(categoria::class, 'id_categoria', 'id_categoria');
    }
}
