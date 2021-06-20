<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria_cursos;
class CategoriaController extends Controller
{
    //
    function index(){
        $categorias = Categoria_cursos::all();
        return view('cursos', ['categorias' =>$categorias]);
    }
}
