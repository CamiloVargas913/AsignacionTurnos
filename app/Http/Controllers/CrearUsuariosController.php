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
    	$usuarios=[];
    	$usuarios[]=[
    		"Nombre"=>$nombre,
    		"Apellido"=>$apellido,
    		"Documento"=>$documento,
    		"Ciudad"=>$ciudad,
    		"Edad"=>$edad,
    		"Tipo"=>$tipo,
    		"Prioridad"=>$prioridad
    	];
			
	  		dd($usuarios);

    }
}
