<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
class herramientaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            
            [
                'id_productoh'=> '70',
                'nombre'=> 'Banco de trabajo', 
                'descripcion'=> 'Está fabricado con maderas duras y cuenta con una estructura sólida para 
                poder soportar piezas de gran tamaño y peso sin perder la estabilidad.', 
                'precio'=> 300.000, 
                'id_categoria'=> '30', 
                'fotoproducto'=> 'banco.jpg', 
            ],
            [
                'id_productoh'=> '80',
                'nombre'=> 'limas', 
                'descripcion'=> ' pule o ajusta agujeros redondos o espacios de la madera.', 
                'precio'=>120.000, 
                'id_categoria'=> '30', 
                'fotoproducto'=> 'limas.jpg', 
            ],
            [
                'id_productoh'=> '90',
                'nombre'=> 'Sargento', 
                'descripcion'=> 'Prensa En C 6 Pulgadas', 
                'precio'=> 30.000, 
                'id_categoria'=> '30', 
                'fotoproducto'=> 'sargento.jpg', 
            ],
          
            
          
        ];
        DB::table('herramienta')->insert($datos);
    }
}
