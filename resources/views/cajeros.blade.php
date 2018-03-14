@extends('Home')
@section('contenido')
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Cajeros</a>
        </li>
        <li class="breadcrumb-item active">Atencion Cliente</li>
      </ol>
      <form action="{{url('formusuarios')}}" method="POST" class="float-left m-4">
        {{csrf_field()}}
        <div class="container col-12 card p-4">
           <h2 class="text-center" >Cajero #1 </h2>
           <h3 class="text-center" >Atencion por Identificacion </h3>
          <div class="form-group row">
            <div class="col-12">
              <input class="form-control" type="number" placeholder="C.C." name="documento" id="example-text-input" required="">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
      </form>
      <form action="{{url('formusuarios')}}" method="POST" class="float-left m-4">
        {{csrf_field()}}
        <div class="container col-12 card p-4">
           <h2 class="text-center" >Cajero #2 </h2>
           <h3 class="text-center" >Atencion por Prioridad </h3>
          <div class="form-group row">
            <div class="col-12">
              <select class="form-control" name="prioridad" id="prioridad" required="">
                <option value="">Ingrese una priorodad</option>
                <option value="1">1. Mujer embarazada </option>
                <option value="2">2.Tercera edad</option>
                <option value="3">3.Discapacidad</option>
                <option value="4">4.Mujer</option>
                <option value="5">5.Hombre</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
      </form>
      <form action="{{url('formusuarios')}}" method="POST" class="float-left m-4">
        {{csrf_field()}}
        <div class="container col-12 card p-4">
          <h2 class="text-center" >Cajero #3 </h2>
           <h3 class="text-center" > Atencion mayor edad </h3>
          <div class="form-group row">
            <div class="col-12">
              <input class="form-control" type="number" placeholder="Edad" name="edad" id="example-text-input" required="">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
      </form>
      <div class="contenido">
        @section('contenido2')
        
        @stop
       </div>
@stop