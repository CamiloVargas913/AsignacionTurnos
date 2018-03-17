<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \SplDoublyLinkedList;

use \Session;

class cajeroEdadController extends Controller
{
    public function cajeroEdad(Request $value){
    	
    	$edad=$value->input('edad');
    	$atendido=new SplDoublyLinkedList;
        $atendido1=new SplDoublyLinkedList;
    
	    	foreach (Session::get('Usuarios') as $key=>$usuario) {
                  if (Session::has('vistaAtendido')) {
                    
                        if ($usuario['Edad']==$edad) {
                            $atendido[]=[
                            "ID"=>3,
                            "Turno"=>$key,
                            "Nombre"=>$usuario['Nombre'],
                            "Apellido"=>$usuario['Apellido'],
                            "Documento"=>$usuario['Documento'],
                            "Ciudad"=>$usuario['Ciudad'],
                            "Edad"=>$usuario['Edad'],
                            "Tipo"=>$usuario['Tipo'],
                            "Prioridad"=>$usuario['Prioridad']
                            ];
                            Session::put('vistaAtendido',$atendido);
                            
                        }else{
                            return view('alertas/cajeroError');
                        }
                   }else{
                        $atendido1[]=[
                            "ID"=>3,
                            "Turno"=>$key,
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
        return view('vistaTurnos');
    }
}