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
        $elimiusu=new SplDoublyLinkedList;
        $elimiusu=[];
        foreach (Session::get('vistaAtendido') as $keys=> $atendido) {
             $turno=$atendido['Turno'];
             if (Session::has('Usuarios')) {
                    foreach (Session::get('Usuarios') as $index => $usuarios) {
                       $elimiusu[$index]=[
                        "Nombre"=>$usuarios['Nombre'],
                        "Apellido"=>$usuarios['Apellido'],
                        "Documento"=>$usuarios['Documento'],
                        "Ciudad"=>$usuarios['Ciudad'],
                        "Edad"=>$usuarios['Edad'],
                        "Tipo"=>$usuarios['Tipo'],
                        "Prioridad"=>$usuarios['Prioridad']
                        ];
                    }
                }
                if ($keys==$variable) {
                    array_splice($elimiusu,$turno, 1);
                    Session::put('Usuarios',$elimiusu);
                }

            if (Session::has('reporteAtendido')) {
                if ($keys==$variable) {
                    $reporte=Session::get('reporteAtendido');
                    $reporte[]=[
                    "ID"=>$atendido['ID'],
                    "Turno"=>$atendido['Turno'],
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