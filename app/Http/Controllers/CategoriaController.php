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

    function agregarCategoria(Request $req){
        $categoria = new Categoria_cursos();
        $categoria->nombre = $req->nombreCategoria;
        $categoria->icono = $req->iconoCategoria;
        $categoria->color = $req->colorCategoria;
        
        $categoria->save();
        return redirect('/cursos');
    }

    function eliminarCategoria($id){
        Categoria_cursos::destroy($id);
        return redirect('/cursos');
    }

    function editarCategoria(Request $req, $id){
        $categoria = Categoria_cursos::find($id);

        $categoria->nombre = $req->nombreCategoria;
        $categoria->icono = $req->iconoCategoria;
        $categoria->color = $req->colorCategoria;

        $categoria->save();

        return redirect('/cursos')->with('success', 'Categoria Editada');
    }
}
