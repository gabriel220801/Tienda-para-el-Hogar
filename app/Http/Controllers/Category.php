<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\Models\categoria;

class Category extends Controller
{
    public function index(){
        $query = categoria::all(); 
        return view('admin.categorias.listado', ['query'=> $query]);
    }
}
