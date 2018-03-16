<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \SplDoublyLinkedList;

use \Session;

class cajeroPrioridadController extends Controller
{
     public function cajeroPrioridad(Request $value){
    	$prioridad=$value->input('prioridad');
    	$atendido=new SplDoublyLinkedList;
        $atendido1=new SplDoublyLinkedList;
    
	    	foreach (Session::get('Usuarios') as $usuario) {
	            foreach ($usuario as $key => $value) {
                  if (Session::has('vistaAtendido')) {
                    
                        if ($usuario['Prioridad']==$prioridad) {
                            $atendido[]=[
                            "ID"=>2,
                            "Nombre"=>$usuario['Nombre'],
                            "Apellido"=>$usuario['Apellido'],
                            "Documento"=>$usuario['Documento'],
                            "Ciudad"=>$usuario['Ciudad'],
                            "Edad"=>$usuario['Edad'],
                            "Tipo"=>$usuario['Tipo'],
                            "Prioridad"=>$usuario['Prioridad']
                            ];
                            Session::put('vistaAtendido',$atendido);
                            return view('vistaTurnos');
                        }   
                   }else{
                        $atendido1[]=[
                            "ID"=>2,
                            "Nombre"=>$usuario['Nombre'],
                            "Apellido"=>$usuario['Apellido'],
                            "Documento"=>$usuario['Documento'],
                            "Ciudad"=>$usuario['Ciudad'],
                            "Edad"=>$usuario['Edad'],
                            "Tipo"=>$usuario['Tipo'],
                            "Prioridad"=>$usuario['Prioridad']
                        ];
                            Session::put('vistaAtendido',$atendido1);

                    }    
                
	        }
        }
    }
}
