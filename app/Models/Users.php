<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = 'true';

    public function Rol(){
        return $this->belongsTo(Rol::class, 'id_rol', 'id_rol');
    }

}
