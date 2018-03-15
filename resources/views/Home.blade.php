<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Banco Udecimo</title>
  <!-- Bootstrap core CSS-->
  <link href="{{'vendor/bootstrap/css/bootstrap.min.css'}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{'vendor/font-awesome/css/font-awesome.min.css'}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{'vendor/datatables/dataTables.bootstrap4.css'}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{'css/sb-admin.css'}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{'css/sliderCard.css'}}" rel="stylesheet">
</head>

<body class="sticky-footer sidenav-toggled bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg static-top navbar-dark bg-dark" id="mainNav">
    <a class="navbar-brand " href="">Banco Udecimo  <li class=" fa fa-money "> </li> </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Registro Usuarios">
          <a class="nav-link" href="{{'usuario'}}">
            <i class="fa fa-users"></i>
            <span class="nav-link-text">Registro Usuarios</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cajeros">
          <a class="nav-link" href="{{'cajeros'}}">
            <i class="fa fa-child"></i>
            <span class="nav-link-text">Cajeros</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reporte Cajero">
          <a class="nav-link" href="{{'reporte'}}">
            <i class="fa fa-archive"></i>
            <span class="nav-link-text">Reporte Cajero</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-hashtag"></i> Udec Coding</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid"> 
      <!--carusel-->
          <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                  <div class="card d-block col-3 p-2 m-1">
                    <h3 class="text-center">Listado Turnos</h3>
                  </div>
                </div>
                @if(Session::has('Usuarios'))
                  @foreach(Session::get('Usuarios') as $index => $usuarios)
                      <div class="carousel-item">
                        <div class="card d-block col-3 p-2 m-1">
                          <i class="fa fa-id-badge float-left"></i>
                            <ul class="data float-left">
                              <li><b>{{ "# Turno: "}}</b>{{ $index }}</li>
                            @foreach($usuarios as $key=> $value)  
                              <li><small><b>{{ $key.": "}}</b>{{ $value}}</small></li>
                             @endforeach  
                            </ul>
                        </div>
                      </div>
                    @endforeach
                  @endif 
                <div class="carousel-item">
                  <div class="card d-block col-3 p-3 m-1">
                    <i class="fa fa-id-badge "></i>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card d-block col-3 p-3 m-1">
                    <i class="fa fa-id-badge "></i>
                  </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
      <!--contenido-->
      <section class="Contenido p-3">
        @yield('contenido')
      </section>
    </div>
  </div>
     <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Juan Vargas & David Márquez 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
     <!-- Bootstrap core JavaScript-->
    <script src="{{'vendor/jquery/jquery.min.js'}}"></script>
    <script src="{{'vendor/bootstrap/js/bootstrap.bundle.min.js'}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{'vendor/jquery-easing/jquery.easing.min.js'}}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{'vendor/chart.js/Chart.min.js'}}"></script>
    <script src="{{'vendor/datatables/jquery.dataTables.js'}}"></script>
    <script src="{{'vendor/datatables/dataTables.bootstrap4.js'}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{'js/sb-admin.min.js'}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{'js/sb-admin-datatables.min.js'}}"></script>
    <script src="{{'js/sb-admin-charts.min.js'}}"></script>
    <script src="{{'js/sliderCard.js'}}"></script>
  </div>
</body>
</html>
