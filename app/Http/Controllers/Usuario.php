<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use  App\Models\Users;
use  App\Models\Rol;

class Usuario extends Controller
{
    public function index(){
        $query = Users::all();
        return view('admin.usuarios.listado', ['query'=> $query]);
    }

    public function eliminar($id){
        
        $user = Users::findOrFail($id);
        echo $user;
        $user->delete();
        return redirect()->route('listado_usuarios');
    }
}
