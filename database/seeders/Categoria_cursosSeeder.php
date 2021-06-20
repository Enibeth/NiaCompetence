<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categoria_cursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('Categoria_cursos')->insert([
            [
                'nombre' => 'Data Science',
                'Icono' => 'ri-database-2-line',
                'color' => '#47aeff'
            ],
            [
                'nombre' => 'Ciberseguridad',
                'Icono' => 'ri-git-repository-private-fill',
                'color' => ' #5578ff'
            ],
            [
                'nombre' => 'Transformacion Digital',
                'Icono' => 'ri-paint-brush-line',
                'color' => '#47aeff'
            ],
            [
                'nombre' => 'Gestion de Sistemas de Informacion',
                'Icono' => 'ri-dalendar-todo-line',
                'color' => '#e80368'
            ],
            [
                'nombre' => 'Aseguramiento de Calidad',
                'Icono' => 'ri-price-tag-2-line',
                'color' => '#ffbb2c'
            ],
            [
                'nombre' => 'Ofimática',
                'Icono' => 'ri-computer-line',
                'color' => '#ff562c'
            ],
            [
                'nombre' => 'Móviles',
                'Icono' => 'ri-device-line',
                'color' => '#925663'
            ],
            [
                'nombre' => 'Videojuegos',
                'Icono' => 'ri-gamepad-line',
                'color' => '#2cff2c'
            ],
        ]);
    }
}
