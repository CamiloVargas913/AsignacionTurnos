@extends('Home')
@section('contenido')
    <!--<div class="container-fluid">
      Breadcrumbs
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ 'compras' }}">Compras</a>
        </li>
        <li class="breadcrumb-item active">Compra Articulos</li>
      </ol>
    </div>-->
  <form action="{{url('formusuarios')}}" method="POST">
  	{{csrf_field()}}
    <div class="container col-8 card p-4">
       <h2 class="text-center" >Ingrese Sus Datos</h2>
      <div class="form-group row">
      <div class="col-12">
        <input class="form-control" type="text" placeholder="Nombre" name="nombrecomprador" id="example-text-input" required="">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-12">
        <input class="form-control" type="text" placeholder="Apellido" name="Apellido" id="example-text-input" required="">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-12">
        <input class="form-control" type="number" placeholder="C.C" name="cedula" id="example-text-input" required="">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-12">
        <input class="form-control" type="text" placeholder="Ciudad" name="ciudad" id="example-text-input" required="">
      </div>
    </div>
     <div class="form-group row">
      <div class="col-12">
        <input class="form-control" type="number" placeholder="Edad" name="edad" id="example-text-input" required="">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-12">
        <select name="tipo" id="tipo" required="">
          <option value="">Ingrese tipo de turno</option>
          <option value="1">Consignacion</option>
          <option value="2">Retiro</option>
          <option value="3">Consulta Administrativa</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-12">
        <select name="prioridad" id="prioridad" required="">
          <option value="">Ingrese una priorodad</option>
          <option value="1">1. Mujer embarazada </option>
          <option value="2">2.Tercera edad</option>
          <option value="3">3.Discapacidad</option>
          <option value="4">4.Mujer</option>
          <option value="5">5.Hombre</option>
        </select>
      </div>
    </div> 
    <button type="submit" class="btn btn-primary">Generar Turno</button>
  </div>
  </form>
@stop