<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
class muebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'id_productom'=> '10',
                'nombre'=> 'Melissa - Doug - Mesa De Madera Maciza Y 2 Sillas - Muebles', 
                'descripcion'=> 'Mesa y sillas de madera maciza melissa y doug, muebles 
                para niños, muebles de madera maciza, juego de 3 piezas, 20 x 23,5 x 20,5 l', 
                'precio'=> 1032.900 , 
                'id_categoria'=> '10',
                'fotoproducto'=> 'mesa.jpg',
            ],
            [
                'id_productom'=> '20',
                'nombre'=> 'Escritorio RTA', 
                'descripcion'=> 'Ya sea para estudiar o trabajar, este escritorio RTA Muebles te ayudará a crear un ambiente confortable 
                y sumar orden y funcionalidad a tus horas productivas. ', 
                'precio'=> 173.900, 
                'id_categoria'=> '10', 
                'fotoproducto'=> 'escritorio.jpg',
            ],
            [
                'id_productom'=> '30',
                'nombre'=> 'Clóset RTA', 
                'descripcion'=> 'RTA Muebles es una empresa que busca ofrecer productos únicos, de excelente
                 calidad, con precios competitivos y diseños innovadores y funcionales.', 
                'precio'=> 565.900, 
                'id_categoria'=> '10', 
                'fotoproducto'=> 'armario.jpg',
            ],
        ];
        DB::table('mueble')->insert($datos);
    }
}
