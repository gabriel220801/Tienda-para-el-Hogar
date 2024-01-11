<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\categoria;
use App\Models\Users;
use App\Models\Product;
use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    public function obtener()
    {
        $cantidadP = Product::all()
            ->select('id_categoria', DB::raw('count(*) as cantidad'))
            ->groupBy('id_categoria')
            ->get();

        $cantidadU = Users::all()->count();

        return view('dashboard', ['cantidadP'=> $cantidadP]);
    }
}

