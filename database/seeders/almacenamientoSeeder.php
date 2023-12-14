<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
class almacenamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
           
            [
                'id_productoa'=> '91',
                'nombre'=> 'Baúl En Madera', 
                'descripcion'=> 'Baúl elaborado en madera maciza con acabado vintage y decoración hierro.', 
                'precio'=> 279.500, 
                'id_categoria'=> '40', 
                'fotoproducto'=> 'baul.jpg', 
            ],
            [
                'id_productoa'=> '92',
                'nombre'=> 'Zapatero De 2 Niveles', 
                'descripcion'=> 'Práctico organizador de zapatos fabricado en materiales
                 de alta calidad y resistencia, fácil y rápido de ensamblar', 
                'precio'=> 69.900, 
                'id_categoria'=> '40', 
                'fotoproducto'=> 'zapatero.jpg', 
            ],
            
          
        ];
        DB::table('almacenamiento')->insert($datos);
    }
}
