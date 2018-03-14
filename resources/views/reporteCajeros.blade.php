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
                  <th>Nombre Cliente</th>
                  <th>Apellido</th>
                  <th>Cedula</th>
                  <th>Ciudad</th>
                  <th>Edad</th>
                  <th>Tipo Turno</th>
                  <th>Prioridad</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th># Cajero</th>
                  <th>Nombre Cliente</th>
                  <th>Apellido</th>
                  <th>Cedula</th>
                  <th>Ciudad</th>
                  <th>Edad</th>
                  <th>Tipo Turno</th>
                  <th>Prioridad</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Camilo</td>
                  <td>Vargas</td>
                  <td>1073172889</td>
                  <td>Madrid</td>
                  <td>21</td>
                  <td>Retiro</td>
                  <td>Hombre</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Inelba</td>
                  <td>Vargas</td>
                  <td>1073172555</td>
                  <td>Madrid</td>
                  <td>18</td>
                  <td>Retiro</td>
                  <td>Mujer</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Nilson</td>
                  <td>Vargas</td>
                  <td>107317123</td>
                  <td>Madrid</td>
                  <td>30</td>
                  <td>Retiro</td>
                  <td>Hombre</td>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Listado de atendidos</div>
      </div>
@stop