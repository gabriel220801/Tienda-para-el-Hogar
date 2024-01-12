<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\Carrito;
use  App\Models\Product;

class CarritoController extends Controller
{
    public function verCarrito()
    {
        // Recupera todos los registros de la tabla 'carrito'
        $productosCarrito = Carrito::all();

        return view('carrito.ver', compact('productosCarrito'));
    }
   

    public function agregarAlCarrito(Request $request, $idProducto)
    {
        // Busca el producto por su ID
        $producto = Product::find($idProducto);

        if ($producto) {
            // Obtiene el carrito actual (siempre existe)
            $carrito = Carrito::first();

            if ($carrito) {
                // Agrega el producto al carrito
                $carrito->productos()->attach($idProducto);

                // Redirige a la página de verCarrito
                return redirect()->route('carrito.ver')->with('success', 'Producto agregado al carrito');
            }

            
        }

        
    }
}
