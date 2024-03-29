<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\Models\Product;
use  App\Models\categoria;
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

   public function getKeyName()
{
    return 'id'; // O el nombre de tu clave primaria
}

   public function muebles(){
      $muebles = Product::where('id_categoria', '=', 10)->get();
      return view('productos.muebles', compact('muebles'));
  }
   public function decoracion(){
      $decoraciones= Product::where('id_categoria', '=', 20)->get();
      return view ('productos.decoracion',  compact('decoraciones'));
   }
   public function herramientas(){
      $herramientas= Product::where('id_categoria', '=', 30)->get();
      return view ('productos.herramientas',  compact('herramientas'));
   }
   public function almacenamiento(){
      $almacenamientos= Product::where('id_categoria', '=', 40)->get();
      return view ('productos.almacenamientos',compact('almacenamientos') );
   }

   //  ADMINISTRADOR

   public function index(){
      $query = Product::all(); // Select * from productos
      return view('admin.productos.listado', ['query'=> $query]);
   }
   
   public function form_registro(){
      $producto = Product::all(); // O cualquier lógica para obtener productos según tus necesidades
      return view('admin.productos.form_registro', compact('producto'));
  }
   
   public function registrar(Request $request){
         $producto = new Product();
         $producto->id_producto = $request->input('id_producto');
         $producto->nombre = $request->input('nom_producto');
         $producto->descripcion = $request->input('des_producto');
         $producto->precio = $request->input('pre_producto');
         $producto->id_categoria = $request->input('id_categoria');
         if ($request->hasFile('fotoproducto')) {
            $imagen = $request->file('fotoproducto');
            $nombreImagen = $imagen->getClientOriginalName();
            $rutaImagen = public_path('img/');
            $imagen->move($rutaImagen, $nombreImagen);
            $producto->fotoproducto = $nombreImagen;
         }
    
         $producto->save();
         return redirect()->route('listado_productos');
   }

   public function form_edicion($id){
         
         $producto = Product::findOrFail($id);
         $categoria = categoria::all();
         return view('admin.productos.form_edicion', compact('producto','categoria'));
               
   }

   public function editar(Request $request, $id){
      try {
          $producto = Product::findOrFail($id);
          $producto->id_producto = $request->input('id_producto');
          $producto->nombre = $request->input('nom_producto');
          $producto->descripcion = $request->input('des_producto');
          $producto->precio = $request->input('pre_producto');
          $producto->id_categoria = $request->input('id_categoria');
  
          if ($request->hasFile('fotoproducto')) {
              $imagen = $request->file('fotoproducto');
              $nombreImagen = $imagen->getClientOriginalName();
              $imagen->move(public_path('img/'), $nombreImagen);
              $producto->fotoproducto = $nombreImagen;
          }
  
          $producto->save();
  
          return redirect()->route('listado_productos')->with('success', 'Producto actualizado correctamente');
      } catch (\Exception $e) {
          return redirect()->back()->with('error', 'Error al actualizar el producto: ' . $e->getMessage());
      }
  }

   public function eliminar($id){
         
         $producto = Product::findOrFail($id);
         echo $producto;
         $producto->delete();
         return redirect()->route('listado_productos');
   }


}
