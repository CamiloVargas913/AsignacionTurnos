<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \SplDoublyLinkedList;

use \Session;

class atendidosController extends Controller
{
    public function atendidos(Request $value){
		$variable=$_GET['key'];
		$reporte=new SplDoublyLinkedList;
		$reporte1=new SplDoublyLinkedList;
		foreach (Session::get('vistaAtendido') as $keys=> $atendido) {
            if (Session::has('reporteAtendido')) {
                if ($keys==$variable) {
                    $reporte[]=[
                    "ID"=>$atendido['ID'],
                    "Nombre"=>$atendido['Nombre'],
                    "Apellido"=>$atendido['Apellido'],
                    "Documento"=>$atendido['Documento'],
                    "Ciudad"=>$atendido['Ciudad'],
                    "Edad"=>$atendido['Edad'],
                    "Tipo"=>$atendido['Tipo'],
                    "Prioridad"=>$atendido['Prioridad']
                    ];
                    Session::put('reporteAtendido',$reporte);
                   
                }
                
           }else{
                $reporte1[]=[
                    "ID"=>$atendido['ID'],
                    "Nombre"=>$atendido['Nombre'],
                    "Apellido"=>$atendido['Apellido'],
                    "Documento"=>$atendido['Documento'],
                    "Ciudad"=>$atendido['Ciudad'],
                    "Edad"=>$atendido['Edad'],
                    "Tipo"=>$atendido['Tipo'],
                    "Prioridad"=>$atendido['Prioridad']
                ];
                    Session::put('reporteAtendido',$reporte1);

            }
        }          
        return view('alertas/cajeroExito');    
    }
}
