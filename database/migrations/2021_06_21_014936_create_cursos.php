<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();

            $table->string("nombre");
            $table->float("precio");
            $table->string("nivel");
            $table->string("sobre_curso");
            $table->string("codigo")->unique;
            $table->string("motivacion");
            $table->boolean("visibilidad");
            $table->foreignId("categoria")->constrained("categoria_cursos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
