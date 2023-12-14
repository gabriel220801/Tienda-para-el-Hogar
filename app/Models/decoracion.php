<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class decoracion extends Model
{
    protected $table = 'decoracion';
    protected $primaryKey = 'id_productod';
    public $timestamps = 'true';

    public function categoria(){
        return $this->belongsTo(categoria::class, 'id_categoria', 'id_categoria');
    }
}
