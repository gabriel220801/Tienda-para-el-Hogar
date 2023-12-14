<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'id_categoria'=> '10',
                'nombre'=> 'Muebles', 
            ],
            [
                'id_categoria'=> '20',
                'nombre'=> 'Decoracion', 
            ],
            [
                'id_categoria'=> '30',
                'nombre'=> 'Herramientas y accesorios', 
            ],
            [
                'id_categoria'=> '40',
                'nombre'=> 'Almacenamientos', 
            ],
          
        ];
        DB::table('categorias')->insert($datos);
        
    }
}
