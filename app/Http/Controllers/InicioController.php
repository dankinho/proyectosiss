<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class InicioController extends Controller
{
    public function verificar(Request $request){
        if(Auth::attempt(["nombre_usuario"=>$request->nombre_usuario,"password"=>$request->password,"tx_fecha"=>null])){
             return Redirect::to('usuarios');
        }else{
            return view("auth.login");
        }
    }
    public function salir(){
        Auth::logout();
        return view("auth.login");
    }
}
