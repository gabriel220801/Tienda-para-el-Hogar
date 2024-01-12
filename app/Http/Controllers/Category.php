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

    public function form_registro(){
        $cat = categoria::all();
        return view('admin.categorias.form_registro', compact('cat'));
     }
     
     public function registrar(Request $request){
        $categoria = new categoria();
        $categoria->id_categoria = $request->input('id_categoria');
        $categoria->nom_categoria = $request->input('nom_categoria');
        
        $categoria->save();
        return redirect()->route('listado_categorias');
     }
  
     public function form_edicion($id){
           
           $categoria = categoria::findOrFail($id);
           return view('admin.categorias.form_edicion', compact('categoria'));
                 
     }
  
     public function editar(Request $request, $id){
        
            $categoria = categoria::findOrFail($id);
            $categoria->id_categoria = $request->input('id_categoria');
            $categoria->nom_categoria = $request->input('nom_categoria');
                
            $categoria->save();
    
            return redirect()->route('listado_categorias');
        
    }
  
     public function eliminar($id){
           
           $categoria = categoria::findOrFail($id);
           echo $categoria;
           $categoria->delete();
           return redirect()->route('listado_categorias');
     }
}
