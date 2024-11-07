<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; //Encriptar las contraseñas

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    //Crear 1 administrador (rol_id = 1)
    //Crear 1 asesor (rol_id = 2)
    //Crear 1 usuario (rol_id = 3)
    public function run(): void
    {
        User::Create([
            'nombres' => 'Admin',
            'apellidos' => 'Principal',
            'telefono' => '7777777777',
            'email' => 'admin@example.com',
            'foto' => null,
            'password' => Hash::make('password'),
            'rol_id' => 1, //Administrador
        ]);

        User::factory()->count(3)->create([
            'rol_id' => 2 //Asesor
        ]);

        User::factory()->count(10)->create([
            'rol_id' => 3 //Usuario
        ]);
    }
}
