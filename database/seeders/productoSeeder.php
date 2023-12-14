<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'id_producto'=> '10',
                'nombre'=> 'Melissa - Doug - Mesa De Madera Maciza Y 2 Sillas - Muebles', 
                'descripcion'=> 'Mesa y sillas de madera maciza melissa y doug, muebles 
                para niños, muebles de madera maciza, juego de 3 piezas, 20 x 23,5 x 20,5 l', 
                'precio'=> 1032.900 , 
                'id_categoria'=> '10',
                'fotoproducto'=> 'mesa.jpg',
            ],
            [
                'id_producto'=> '20',
                'nombre'=> 'Escritorio RTA', 
                'descripcion'=> 'Ya sea para estudiar o trabajar, este escritorio RTA Muebles te ayudará a crear un ambiente confortable 
                y sumar orden y funcionalidad a tus horas productivas. ', 
                'precio'=> 173.900, 
                'id_categoria'=> '10', 
                'fotoproducto'=> 'escritorio.jpg',
            ],
            [
                'id_producto'=> '30',
                'nombre'=> 'Clóset RTA', 
                'descripcion'=> 'RTA Muebles es una empresa que busca ofrecer productos únicos, de excelente
                 calidad, con precios competitivos y diseños innovadores y funcionales.', 
                'precio'=> 565.900, 
                'id_categoria'=> '10', 
                'fotoproducto'=> 'armario.jpg',
            ],
            [
                'id_producto'=> '40',
                'nombre'=> 'Arbol Madera', 
                'descripcion'=> 'árbol de navidad en madera vintage con luz led calida,
                 adicionalmente trae 8 bolas de adorno para que luzca hermoso en tu casa', 
                'precio'=> 79.990, 
                'id_categoria'=> '20', 
                'fotoproducto'=> 'arbol.jpg', 
            ],
            [
                'id_producto'=> '50',
                'nombre'=> 'Portaretrato En Marco Madera', 
                'descripcion'=> 'Porta retratos en marco madera
                En acetato para mejor conservación de la foto', 
                'precio'=> 9.880, 
                'id_categoria'=> '20',  
                'fotoproducto'=> 'retrato.jpg',
            ],
            [
                'id_producto'=> '60',
                'nombre'=> 'Alcancía Madera', 
                'descripcion'=> 'Alcancía Caja en madera MDF con vidrio, 
                incluye imagen decorativa de fondo y plan de ahorro. ', 
                'precio'=> 27.075, 
                'id_categoria'=> '20', 
                'fotoproducto'=> 'alcancia.jpg'
            ],
            [
                'id_producto'=> '70',
                'nombre'=> 'Banco de trabajo', 
                'descripcion'=> 'Está fabricado con maderas duras y cuenta con una estructura sólida para 
                poder soportar piezas de gran tamaño y peso sin perder la estabilidad.', 
                'precio'=> 300.000, 
                'id_categoria'=> '30', 
                'fotoproducto'=> 'banco.jpg', 
            ],
            [
                'id_producto'=> '80',
                'nombre'=> 'limas', 
                'descripcion'=> ' pule o ajusta agujeros redondos o espacios de la madera.', 
                'precio'=>120.000, 
                'id_categoria'=> '30', 
                'fotoproducto'=> 'limas.jpg', 
            ],
            [
                'id_producto'=> '90',
                'nombre'=> 'Sargento', 
                'descripcion'=> 'Prensa En C 6 Pulgadas', 
                'precio'=> 30.000, 
                'id_categoria'=> '30', 
                'fotoproducto'=> 'sargento.jpg', 
            ],
            [
                'id_producto'=> '91',
                'nombre'=> 'Baúl En Madera', 
                'descripcion'=> 'Baúl elaborado en madera maciza con acabado vintage y decoración hierro.', 
                'precio'=> 279.500, 
                'id_categoria'=> '40', 
                'fotoproducto'=> 'baul.jpg', 
            ],
            [
                'id_producto'=> '92',
                'nombre'=> 'Zapatero De 2 Niveles', 
                'descripcion'=> 'Práctico organizador de zapatos fabricado en materiales
                 de alta calidad y resistencia, fácil y rápido de ensamblar', 
                'precio'=> 69.900, 
                'id_categoria'=> '40', 
                'fotoproducto'=> 'zapatero.jpg', 
            ],
            
          
        ];
        DB::table('productos')->insert($datos);
    }
}
