<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \SplFixedArray;

use \Session;

class CrearUsuariosController extends Controller
{
    public function CrearUsuarios(Request $value){
    	$nombre=$value->input('nombre');
    	$apellido=$value->input('apellido');
    	$documento=$value->input('cedula');
    	$ciudad=$value->input('ciudad');
    	$edad=$value->input('edad');
    	$tipo=$value->input('tipo');
    	$prioridad=$value->input('prioridad');
    	$usuarios=new SplFixedArray();
        $van=true;
        if (Session::has('Usuarios')) {
            $usuarios= Session::get('Usuarios');
            foreach ($usuarios as $usuario) {
                foreach ($usuario as $key => $value) {
                    if ($usuario['Documento']==$documento) {
                        $van=false;
                    }
                }
            }
            if ($van) {
                $usuarios[]=[
                "Nombre"=>$nombre,
                "Apellido"=>$apellido,
                "Documento"=>$documento,
                "Ciudad"=>$ciudad,
                "Edad"=>$edad,
                "Tipo"=>$tipo,
                "Prioridad"=>$prioridad
                ];
                Session::put('Usuarios',$usuarios);
                return view('alertas/usuarioExitoso');
            }else{
                return view('alertas/errorUsuario');
            }
        }else{
            $usuarios1[]=[
            "Nombre"=>$nombre,
            "Apellido"=>$apellido,
            "Documento"=>$documento,
            "Ciudad"=>$ciudad,
            "Edad"=>$edad,
            "Tipo"=>$tipo,
            "Prioridad"=>$prioridad
            ];
            Session::put('Usuarios',$usuarios1);
            return view('alertas/usuarioExitoso');
        }
    }
}