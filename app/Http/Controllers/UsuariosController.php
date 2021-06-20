<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsuariosController extends Controller
{
    //
    function login(Request $req){
        $usuario = Usuarios::where(['email' => $req->email])->first();
        if(!$usuario || !Hash::check($req->password, $usuario->password)){
            return "Username or password not matched";
        }
        else{
            $req->session()->put('usuario', $usuario);
            return redirect('/');
        }
    }
}
