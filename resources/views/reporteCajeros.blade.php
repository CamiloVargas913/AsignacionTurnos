@extends('Home')
@section('contenido')
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Cajeros</a>
        </li>
        <li class="breadcrumb-item active">Reporte</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>  Reporte Cajeros</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th># Cajero</th>
                  <th>Turno</th>
                  <th>Nombre Cliente</th>
                  <th>Apellido</th>
                  <th>Cedula</th>
                  <th>Ciudad</th>
                  <th>Edad</th>
                  <th>Tipo Turno</th>
                  <th>Prioridad</th>
                </tr>
              </thead>  
              <tbody>
                  @if(Session::has('reporteAtendido')) 
              <tr>
                  @foreach (Session::get('reporteAtendido') as $keys=>$reporte)
                    @foreach ($reporte as $key => $reportes) 
                    <td>{{$reportes}}</td>  
                    @endforeach 
                           
              </tr>
                  @endforeach 
              <td></td>    
                @endif  
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Listado de atendidos</div>
      </div>
@stop