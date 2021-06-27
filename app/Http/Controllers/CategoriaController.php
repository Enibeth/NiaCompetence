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
        //if($req->session()->has('usuario')){
            //se puede agarrar y ver si el usuario es admin  
            //$req->session()->get('usuario')['id'];
            //return "ha";
        //}
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
}
