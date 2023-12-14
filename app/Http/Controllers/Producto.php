<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\Models\Product;
use  App\Models\mueble;
use  App\Models\decoracion;
use  App\Models\herramienta;
use  App\Models\almacenamiento;
class Producto extends Controller
{
 public function home(){
    $producto= Product::all();
    return view ('productos.listado', compact('producto'));
 }
 public function muebles(){
    $muebles= mueble::all();
    return view ('productos.muebles', compact('muebles'));
 }
 public function decoracion(){
   $decoraciones= decoracion::all();
    return view ('productos.decoracion',  compact('decoraciones'));
 }
 public function herramientas(){
   $herramientas= herramienta::all();
    return view ('productos.herramientas',  compact('herramientas'));
 }
 public function almacenamiento(){
   $almacenamientos= almacenamiento::all();
    return view ('productos.almacenamientos',compact('almacenamientos') );
 }
}
