<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombre' => 'Alejandro Zabaleta',
            'correo' => 'alexzabaleta12@gmail.com',
            'password'=>bcrypt('12345'),
            'telefono'=>'9616030161',
            'direccion'=>'Calle 1 # 1-1',
            'estado'=>true,
        ]);
        User::create([
            'nombre' => 'Misael Salazar',
            'correo' => 'misasala@gmail.com',
            'password'=>bcrypt('12345'),
            'telefono'=>'9616030333',
            'direccion'=>'Calle 2 # 2-2',
            'estado'=>true,
        ]);
    }
}
