<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuarios')->insert([
            'nombre' => 'Enibeth',
            'apellido' => 'Sanchez',
            'usuario' => 'Enibeth',
            'password' => Hash::make('123123'),
            'email' => 'testingasd,com',
            'tipo' => 1
        ]);
    }
}
