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
        if (Session::has('Usuarios')) {
            $usuarios= Session::get('Usuarios');
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
        echo "Se inserto los valores";
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
            echo "Se creo la sesion";
        }
        return view('Home');
    }
}