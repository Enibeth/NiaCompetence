<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('Cursos')->insert([
            [
                'nombre' => 'Virtualización de Datos y Storytelling',
                'precio' => 'dolares',
                'nivel' => 'Basico - Intermedio',
                'sobre_curso' => '
                Digamos que necesitas comprender big data; miles o incluso millones de filas de datos, y tienes poco tiempo para hacerlo. los datos pueden provenir de tu equipo, en cuyo caso tal vez ya estés familiarizado con lo que estás midiendo y de los resultados que se esperan. O puede provenir de otro equipo, o tal vez de varios equipos a la vez, y estar completamente familiarizado. De cualquier manera, la razón por la que lo estás viendo es porque tienes que tomar una decisión lo mas rápido posible y sería de gran ayuda que los datos te informen como tomarla (inteligencia de negocios); pues esa decisión podrá afectar positiva o negativamente a un cliente, a un producto o a toda la organización. En este curso online, conocerás una parte importante de la ciencia de datos o Data Science; la visualización de los datos y las herramientas que puedes usar para aplicarlos.
                Debido a la forma en que el cerebro humano procesa la información, usar tablas o gráficos para visualizar grandes cantidades de datos complejos es mas fácil que analizar hojas de cálculo o informes. La visualización de datos es una forma rápida y fácil de transmitir conceptos de manera universal, y es posible el poder experimentar con diferentes escenarios haciendo pequeños ajustes.
                La visualización de datos es la presentación de datos en un formato gráfico. Permite a los tomadores de decisiones ver el análisis presentados visualmente, para que puedan comprender conceptos dificiles o identificar nuevos patrones. La visualización de datos revela informacion inadvertida, especiamente en grandes conjuntos de datos (big data); da respuestas mas rápido; y ayuda a entender mas fácilmente la relación causa-efecto.
            ',
                'codigo' => '#47aeff',
                'motivacion' => 'Aprende en este curso en línea que es la visualización de datos, sus usos; los elementos que la conforman y la forma de poder utilizarla para el apoyo en la toma de las mejores decisiones para las empresas basadas en el análisis de datos. ',
                'visibilidad' => 1,
                'categoria' => 1,
                'instructor' => 1,
            ],
        ]);
    }
}
