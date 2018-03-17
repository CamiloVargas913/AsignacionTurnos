<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \SplDoublyLinkedList;

use \Session;

class cajeroIdentificacionController extends Controller
{
    public function cajeroIdentificacion(Request $value){
    	$documento=$value->input('documento');
    	$atendido=new SplDoublyLinkedList;
        $atendido1=new SplDoublyLinkedList;
	    	foreach (Session::get('Usuarios') as $index =>$usuario) {
                  if (Session::has('vistaAtendido')) {
                        if ($usuario['Documento']==$documento) {
                            $atendido[]=[
                            "ID"=>1,
                            "Turno"=>$index,
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
                        }else{

                            return view('alertas/cajeroError');
                        }
                   	}
                        
           			else{
                        $atendido1[]=[
                            "ID"=>1,
                            "Turno"=>$index,
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
