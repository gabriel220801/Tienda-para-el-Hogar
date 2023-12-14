<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Gabriel',
            'email' => 'narvaezgabriel123@gmail.com',
            'password' => Hash::make('219036140'),
            'id_rol' => 2, // ID del rol de administrador 
        ]);
    }
}
