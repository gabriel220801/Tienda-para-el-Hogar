<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
class decoracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'id_productod'=> '40',
                'nombre'=> 'Arbol Madera', 
                'descripcion'=> 'árbol de navidad en madera vintage con luz led calida,
                 adicionalmente trae 8 bolas de adorno para que luzca hermoso en tu casa', 
                'precio'=> 79.990, 
                'id_categoria'=> '20', 
                'fotoproducto'=> 'arbol.jpg', 
            ],
            [
                'id_productod'=> '50',
                'nombre'=> 'Portaretrato En Marco Madera', 
                'descripcion'=> 'Porta retratos en marco madera
                En acetato para mejor conservación de la foto', 
                'precio'=> 9.880, 
                'id_categoria'=> '20',  
                'fotoproducto'=> 'retrato.jpg',
            ],
            [
                'id_productod'=> '60',
                'nombre'=> 'Alcancía Madera', 
                'descripcion'=> 'Alcancía Caja en madera MDF con vidrio, 
                incluye imagen decorativa de fondo y plan de ahorro. ', 
                'precio'=> 27.075, 
                'id_categoria'=> '20', 
                'fotoproducto'=> 'alcancia.jpg'
            ],
            
            
            
          
        ];
        DB::table('decoracion')->insert($datos);
    }
}
