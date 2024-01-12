<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Producto;
use App\Http\Controllers\Category;
use App\Http\Controllers\Usuario;
use  App\Models\Product;
use  App\Models\almacenamiento;
use  App\Models\categoria;
use  App\Models\decoracion;
use  App\Models\herramienta;
use  App\Models\mueble;
use  App\Models\Rol;
use  App\Models\Users;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', [App\Http\Controllers\Dashboard::class, 'obtener']);

Route::get('/', function () {
    $producto = Product::all(); // Obtener todos los productos
    return view('productos.listado', compact('producto'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/productos/muebles', [App\Http\Controllers\Producto::class, 'muebles'])->name('listado_productom');
Route::get('/productos/decoracion', [App\Http\Controllers\Producto::class, 'decoracion'])->name('listado_productoc');
Route::get('/productos/herramientas', [App\Http\Controllers\Producto::class, 'herramientas'])->name('listado_productoh');
Route::get('/productos/almacenamientos', [App\Http\Controllers\Producto::class, 'almacenamiento'])->name('listado_productoa');
Route::get('/productos/home', [App\Http\Controllers\Producto::class, 'home'])->name('listado_producto');


// ADMINISTRADOR
Route::get('admin/productos/listado', [App\Http\Controllers\Producto::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_productos');

Route::get('admin/categorias/listado', [App\Http\Controllers\Category::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_categorias');

Route::get('admin/users/listado', [App\Http\Controllers\Usuario::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_usuarios');

//AGREGAR MUEBLES

Route::get('admin/productos/registrar', [App\Http\Controllers\Producto::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_pro');

Route::post('admin/productos/registrar', [App\Http\Controllers\Producto::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_producto');

//EDICION MUEBLES

Route::get('admin/productos/editar/{id}', [App\Http\Controllers\Producto::class, 'form_edicion']
)->middleware(['auth', 'verified'])->name('editar_pro');

Route::post('admin/productos/editar/{id}', [App\Http\Controllers\Producto::class, 'editar']
)->middleware(['auth', 'verified'])->name('editar_producto');

//ELIMINAR MUEBLES

Route::get('admin/productos/eliminar/{id}', [App\Http\Controllers\Producto::class, 'eliminar']
)->middleware(['auth', 'verified'])->name('eliminar_pro');


// AGREGAR CATEGORIAS

Route::get('admin/categorias/registrar', [App\Http\Controllers\Category::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_cat');

Route::post('admin/categorias/registrar', [App\Http\Controllers\Category::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_categoria');

//EDICION CATEGORIAS

Route::get('admin/categorias/editar/{id}', [App\Http\Controllers\Category::class, 'form_edicion']
)->middleware(['auth', 'verified'])->name('editar_cat');

Route::post('admin/categorias/editar/{id}', [App\Http\Controllers\Category::class, 'editar']
)->middleware(['auth', 'verified'])->name('editar_categoria');

//ELIMINAR CATEGORIAS

Route::get('admin/categorias/eliminar/{id}', [App\Http\Controllers\Category::class, 'eliminar']
)->middleware(['auth', 'verified'])->name('eliminar_cat');

//ELIMINAR USUARIOS

Route::get('admin/usuarios/eliminar/{id}', [App\Http\Controllers\Usuario::class, 'eliminar']
)->middleware(['auth', 'verified'])->name('eliminar_usu');

Route::get('register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store']
)->name('registrar');



Route::middleware(['auth', 'checkRole:administrador'])->group(function () {
    // Rutas accesibles solo para usuarios con el rol 'administrador'
    Route::get('/dashboard', 'App\Http\Controllers\Dashboard@obtener');
});

Route::middleware(['auth', 'checkRole:usuario'])->group(function () {
    // Rutas accesibles solo para usuarios con el rol 'usuario'
    Route::get('productos.listado', 'Producto@home');
});

require __DIR__.'/auth.php';