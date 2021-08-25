<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Usuarios;
use App\Models\Instructores;
use Illuminate\Http\Request;

class InstructoresController extends Controller
{
    //
    function index(){
        $instructores = DB::table('usuarios')
                        ->join('instructores', 'usuarios.id', '=', 'instructores.usuario')
                        ->select('usuarios.id', 'usuarios.nombre', 'usuarios.apellido', 'instructores.titulo', 'instructores.descripcion', 'instructores.url_linkedin', 'instructores.url_facebook', 'instructores.url_twiter', 'instructores.url_foto')
                        ->get();
        return view('instructores', ['instructores' => $instructores]);
        //return dd($instructores);
    }

    function agregarIndex(){
        $usuarioNoInstructor = DB::table('usuarios')
                                ->leftJoin('instructores', 'instructores.usuario', '=', 'usuarios.id')
                                ->select('usuarios.id', 'usuarios.nombre', 'usuarios.apellido')
                                ->whereNull('instructores.usuario')
                                ->get();
        return view('/agregarInstructor', ['noInstructores' => $usuarioNoInstructor]);
        //return dd($usuarioNoInstructor);
    }

    function agregarInstructor(Request $req){
        $instructor = new Instructores();
        $correo = $req->agregaInstructorCorreo;

        //$usuario = Usuarios::whereEmail($correo)->first();

        //$instructor->nombre = $req->nombreCategoria;
        //$instructor->icono = $req->iconoCategoria;
        //$instructor->color = $req->colorCategoria;
        
        //$instructor->save();
        return dd($correo);
        //return redirect('/instructores');
    }
}


