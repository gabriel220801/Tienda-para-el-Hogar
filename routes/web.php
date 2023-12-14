<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Producto;
use  App\Models\Product;
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

require __DIR__.'/auth.php';


Route::get('/productos/muebles', [App\Http\Controllers\Producto::class, 'muebles'])->name('listado_productom');
Route::get('/productos/decoracion', [App\Http\Controllers\Producto::class, 'decoracion'])->name('listado_productoc');
Route::get('/productos/herammientas', [App\Http\Controllers\Producto::class, 'herramientas'])->name('listado_productoh');
Route::get('/productos/almacenamientos', [App\Http\Controllers\Producto::class, 'almacenamiento'])->name('listado_productoa');
Route::get('/productos/home', [App\Http\Controllers\Producto::class, 'home'])->name('listado_producto');